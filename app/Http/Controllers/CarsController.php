<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Models\Car;
use Auth;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cars.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        return view('cars.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit', '256M');
        $rules = [
            'is_listed' => ['required'],
            'kitchencar_id' => ['required'],
            'name' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:300'],
            'price' => ['required', 'string', 'max:30'],
            'file_path1' => 'mimes:jpeg,jpg,png,gif|max:5000',
        ];
        $this->validate($request, $rules);
        if ($file1 = $request->file_path1) {
            // オリジナルサイズで保存
            $time = time();
            $fileName1 = "origin-" . $time . $file1->getClientOriginalName();
            $target_path = public_path('uploads/');
            $maked_file1 = InterventionImage::make($file1);
            $maked_file1->save($target_path .'/' . $fileName1);
            // ファイルコピーしてリサイズ保存
            copy($target_path . "/". $fileName1, $target_path . "/" . $time . $file1->getClientOriginalName());
            $thumbnail_file1 = $time . $file1->getClientOriginalName();
            $thumbnail_path1 = $target_path . "/" . $time . $file1->getClientOriginalName();
            $maked_thumbnail_file1 = InterventionImage::make($thumbnail_path1);
            if ($maked_thumbnail_file1->width() > $maked_thumbnail_file1->height()) {
                $maked_thumbnail_file1
                    ->resizeCanvas($maked_thumbnail_file1->width(), floor($maked_thumbnail_file1->width() * 0.667))
                    ->save($thumbnail_path1);
            } else if ($maked_thumbnail_file1->width() == $maked_thumbnail_file1->height()) {
                $maked_thumbnail_file1->resizeCanvas($maked_thumbnail_file1->width(), $maked_thumbnail_file1->width())
                    ->save($thumbnail_path1);
            } else {
                $maked_thumbnail_file1
                    ->resizeCanvas(floor($maked_thumbnail_file1->height() * 1.5), $maked_thumbnail_file1->height())
                    ->save($thumbnail_path1);
            }
        } else {
            $fileName1 = "";
            $thumbnail_file1 = NULL;
        }
        $Cars = new Setting;
        $Cars->kitchencar_id = $request->kitchencar_id;
        $Cars->name = $request->name;
        $Cars->content = $request->content;
        $Cars->price = $request->price;
        $Cars->file_path1 = $thumbnail_file1;
        $Cars->is_listed = $request->is_listed;
        $Cars->save();
        return redirect('/Cars')->with('message', '追加が完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::find($id);
        return view('admin.cars.edit', compact('cars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        ini_set('memory_limit', '256M');
        $rules = [
            //'is_listed' => ['required'],
            'name' => ['required', 'string', 'max:50'],
            'title' => ['required', 'string', 'max:100'],
            'link' => ['required', 'string', 'max:200'],
            'pubdate' => ['required', 'string', 'max:50'],
            'copyright' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:15'],
            'file_path1' => 'mimes:jpeg,jpg,png,gif|max:5000',
            'file_path2' => 'mimes:jpeg,jpg,png,gif|max:5000',
        ];
        $this->validate($request, $rules);
        if ($file1 = $request->file_path1) {
            // オリジナルサイズで保存
            $time = time();
            $fileName1 = "origin-" . $time . $file1->getClientOriginalName();
            $target_path = public_path('uploads/');
            $maked_file1 = InterventionImage::make($file1);
            $maked_file1->save($target_path .'/' . $fileName1);
            // ファイルコピーしてリサイズ保存
            copy($target_path . "/". $fileName1, $target_path . "/" . $time . $file1->getClientOriginalName());
            $thumbnail_file1 = $time . $file1->getClientOriginalName();
            $thumbnail_path1 = $target_path . "/" . $time . $file1->getClientOriginalName();
            $maked_thumbnail_file1 = InterventionImage::make($thumbnail_path1);
            if ($maked_thumbnail_file1->width() > $maked_thumbnail_file1->height()) {
                $maked_thumbnail_file1
                    ->resizeCanvas($maked_thumbnail_file1->width(), floor($maked_thumbnail_file1->width() * 0.667))
                    ->save($thumbnail_path1);
            } else if ($maked_thumbnail_file1->width() == $maked_thumbnail_file1->height()) {
                $maked_thumbnail_file1->resizeCanvas($maked_thumbnail_file1->width(), $maked_thumbnail_file1->width())
                    ->save($thumbnail_path1);
            } else {
                $maked_thumbnail_file1
                    ->resizeCanvas(floor($maked_thumbnail_file1->height() * 1.5), $maked_thumbnail_file1->height())
                    ->save($thumbnail_path1);
            }
        } else {
            $fileName1 = "";
            $thumbnail_file1 = NULL;
        }
        if ($file2 = $request->file_path2) {
            // オリジナルサイズで保存
            $time = time();
            $fileName2 = "origin-" . $time . $file2->getClientOriginalName();
            $target_path = public_path('uploads/');
            $maked_file2 = InterventionImage::make($file2);
            $maked_file2->save($target_path .'/' . $fileName2);
            // ファイルコピーしてリサイズ保存
            copy($target_path . "/". $fileName2, $target_path . "/" . $time . $file2->getClientOriginalName());
            $thumbnail_file2 = $time . $file2->getClientOriginalName();
            $thumbnail_path2 = $target_path . "/" . $time . $file2->getClientOriginalName();
            $maked_thumbnail_file2 = InterventionImage::make($thumbnail_path2);
            if ($maked_thumbnail_file2->width() > $maked_thumbnail_file2->height()) {
                $maked_thumbnail_file2
                    ->resizeCanvas($maked_thumbnail_file2->width(), floor($maked_thumbnail_file2->width() * 0.667))
                    ->save($thumbnail_path2);
            } else if ($maked_thumbnail_file2->width() == $maked_thumbnail_file2->height()) {
                $maked_thumbnail_file2->resizeCanvas($maked_thumbnail_file2->width(), $maked_thumbnail_file2->width())
                    ->save($thumbnail_path2);
            } else {
                $maked_thumbnail_file2
                    ->resizeCanvas(floor($maked_thumbnail_file2->height() * 1.5), $maked_thumbnail_file2->height())
                    ->save($thumbnail_path2);
            }
        } else {
            $fileName2 = "";
            $thumbnail_file2 = NULL;
        }
        $cars = Car::find($id);
        $cars->id = $request->id;
        $cars->name = $request->name;
        $cars->title = $request->title;
        $cars->link = $request->link;
        $cars->description = $request->description;
        $cars->pubdate = $request->pubdate;
        $cars->copyright = $request->copyright;
        if (!empty($cars->file_path1) && $cars->file_path1 == $request->old_file_path1) {
        } else {
            $cars->file_path1 = $thumbnail_file1;
        }
        if (!empty($cars->file_path2) && $cars->file_path2 == $request->old_file_path2) {
        } else {
            $cars->file_path2 = $thumbnail_file2;
        }
        $cars->save();
        return redirect('/cars/edit/' . $id)->with('message', '変更が完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::destroy($id);
        return redirect('/cars');
    }

    public function json()
    {
        try {
           $result = Car::all();
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}

