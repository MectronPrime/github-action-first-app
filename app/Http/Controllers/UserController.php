<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json([
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John Doe',
                    'email' => 'john@gmail.com',
                    'role' => 'admin',
                ],
                [
                    'id' => 2,
                    'name' => 'Vilium show',
                    'email' => 'vilium@gmail.com',
                    'role' => 'admin',
                ],
                [
                    'id' => 3,
                    'name' => 'Gray mary',
                    'email' => 'mary@gmail.com',
                    'role' => 'employee',
                ],
            ]
        ]);
    }
}