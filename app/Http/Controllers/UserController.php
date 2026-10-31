<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'username' => 'cashier1', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'username' => 'cashier2', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 4, 'username' => 'manager1', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 5, 'username' => 'staff1', 'role' => 'Staff', 'status' => 'Inactive'],
        ];

        return view('users', compact('users'));
    }
}
