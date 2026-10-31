<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Maria Ramos', 'email' => 'maria.ramos@example.com', 'phone' => '0917-555-0101'],
            ['id' => 2, 'name' => 'Rico  Cruz', 'email' => 'rico.cruz@example.com', 'phone' => '0918-555-0102'],
            ['id' => 3, 'name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0919-555-0103'],
            ['id' => 4, 'name' => 'Nico Capinpin', 'email' => 'nico.capinpin@example.com', 'phone' => '0920-555-0104'],
            ['id' => 5, 'name' => 'Sofia Cruz', 'email' => 'sofia.cruz@example.com', 'phone' => '0921-555-0105'],
        ];

        return view('customers', compact('customers'));
    }
}
