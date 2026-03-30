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
                    'email' => 'test@gmail.com',
                    'role' => 'admin',
                ],
                [
                    'id' => 1,
                    'name' => 'janiths sandnuwan',
                    'email' => 'janith@gmail.com',
                    'role' => 'admin',
                ],
                [
                'id' => 1,
                'name' => 'nuwan gamaethige',
                'email' => 'nuwan@gmail.com',
                'role' => 'admin',
            ]
            ]
        ]);
    }
}
