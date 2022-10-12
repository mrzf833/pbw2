<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("employee.index");
    }

    public function create()
    {
        return view("employee.create");
    }

    public function show()
    {
        return view("employee.show");
    }
}
