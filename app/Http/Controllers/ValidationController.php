<?php

namespace App\Http\Controllers;

use App\Rules\Phone;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['nullable', 'string', 'max:50'],
            'age' => ['nullable', 'integer', 'min:18', 'max:100'], //123
            'amout' => ['nullable', 'numeric', 'min:1', 'max:999999999'], //123, 123.45
            'gender' => ['nullable', 'string', 'in:male,female'],
            'zip' => ['required', 'digits:5'], // int with 6 nums, exmp: 08720
            'subscription' => ['nullable', 'boolean'], //true, false, 1, 0
            'agreement' => ['accepted'], //yes, on, 1, true
            'password' => ['required', 'string', 'min:6', 'confirmed'], //password_confirnation
            'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->symbols(), 'confirmed'],
            'current_password' => ['required', 'string', 'current_password'],
            'email' => ['required', 'string', 'email', 'exists:users,email'], //ss@ss.ss in users table in email col
            'country_id' => ['required', 'integer', 'exists:countries,id'], 
            'country_id' => ['required', 'integer', Rule::exists('countries', 'id')->where('active', true)], 
            'phone' => ['required', 'string', 'unique:users,phone'], //check in users table, phone col
            'phone' => ['required', 'string', new Phone, Rule::unique('users', 'phone')->ignore($user)],  //Phone custom rule and ignore curr user
            'website' => ['nullable', 'string', 'url'], //https://google.com
            'uuid' => ['nullable', 'string', 'uuid'], //asdsda-adsdsa-sadsda
            'ip' => ['nullable', 'string', 'ip'], //127.0.0.1
            'avatar' => ['required', 'file', 'image', 'max:1024'], //img max 1MB
            'birth_date' => ['nullable', 'string', 'date'], //any formats date
            'start_date' => ['required', 'string', 'after_or_equal:today'],
            'finish_date' => ['required', 'string', 'after:start_today'],
            'services' => ['nullable', 'array', 'min:1', 'max:10'], //[1,2,3,4,5]
            'services.*' => ['required', 'integer'], //[1,2,3,4,5]
            'delivery' => ['required', 'array', 'size:2'], //['date'=>'2020.10.09', 'time'=>'12:30:00']
            'delivary.date' => ['required', 'string', 'date_format:Y.m.d'], //2020.10.10
            'delivary.time' => ['required', 'string', 'date_format:H:i:s'], //12:30:00
            'secret' => ['required', 'string', function ($attributes, $value, \Closure $fail){
                if($value !== config('example.foo')){
                    $fail(__('Wrong key'));
                }
            }],
        ]);
    }
}
