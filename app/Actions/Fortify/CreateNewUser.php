<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $validator = Validator::make($input, [
            'name' => [
                'required', 'string', 'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    if ($value !== 'formadiksipolinema@gmail.com') {
                        $fail('The ' . $attribute . ' is not allowed.');
                    }
                },
            ],
            'password' => $this->passwordRules(),
        ]);

        // Lakukan validasi role hanya jika 'name' ada dalam input
        if (array_key_exists('name', $input)) {
            $validator->sometimes('role', ['enum:admin,superadmin'], function ($input) {
                return str_contains($input->name, 'admin');
            });
        }

        $validator->validate();

        $role = str_contains($input['name'], 'admin') ? 'superadmin' : 'admin';

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'role' => $role,
            'password' => Hash::make($input['password']),
        ]);
    }
}
