<?php

namespace App\Http\Controllers;

use App\Models\DetailBarang;
use App\Models\Employee;
use App\Models\ListBarang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    $totalEmployees = Employee::count();
    $availableVehicles = ListBarang::sum('stok');
    $transactions = Transaksi::count();
    $successfulTransactions = DetailBarang::count();

    return view('admin-dashboard', compact(
        'totalEmployees', 'availableVehicles', 'transactions', 'successfulTransactions', 'income'
    ));
}
}
