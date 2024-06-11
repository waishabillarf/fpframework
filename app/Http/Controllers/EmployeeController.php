<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'username' => 'required|string|max:255|unique:employees',
            'password' => 'required|string|min:8|confirmed',
            'level' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        Employee::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('employees.index')->with('success', 'User added successfully.');
    }
}
