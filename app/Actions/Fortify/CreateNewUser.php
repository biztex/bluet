<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'name_kana' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:13'],
            'tel2' => ['nullable', 'string', 'max:13'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'email2' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['nullable', 'string', 'max:255'],
            'birth_day' => ['nullable', 'date'],
            'postal_code' => ['required', 'string', 'max:8'],
            'prefecture' => ['required', 'string', 'max:5'],
            'address' => ['required', 'string', 'max:500'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'name_kana' => $input['name_kana'],
            'tel' => $input['tel'],
            'tel2' => $input['tel2'],
            'email' => $input['email'],
            'email2' => $input['email2'],
            'gender' => $input['gender'],
            'birth_day' => $input['birth_day'],
            'postal_code' => $input['postal_code'],
            'prefecture' => $input['prefecture'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
