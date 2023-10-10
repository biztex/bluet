// 単発削除
function confirmDelete(){
    var checked = confirm("【確認】本当に削除してよろしいですか？");
    if (checked == true) {
        return true;
    } else {
        return false;
    }
}

//　複数削除
function confirmDeleteSelected(){
    var checked = confirm("【確認】選択したデータを本当に削除してよろしいですか？");
    if (checked == true) {
        var ids = $('input[type="checkbox"]:checked').map(function(){
            return $(this).val();
        }).get();
        $('input[name="ids"]').val(ids); 
        return true;
    } else {
        var ids = $('input[type="checkbox"]:checked').map(function(){
            return $(this).val();
        }).get();
        $('input[name="ids"]').val(ids); 
        return false;
    }
}

//　全て選択・解除
$(document).ready(function(){
    $('.select-items').on('click', function() {
        var allBoxNum = $('input[type="checkbox"]').length,
            checkedBoxNum = $('input[type="checkbox"]:checked').length;
        if(checkedBoxNum == allBoxNum) {
            $('input[name="row-data"]').prop('checked',false);
        } else {
            $('input[name="row-data"]').prop('checked',true);
        }
    });
});
