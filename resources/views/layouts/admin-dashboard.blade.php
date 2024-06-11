@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="total">
        <div class="totalUser">
            <img src="{{ asset('assets/img/group.svg') }}" alt="">
            <p>Total Employee <br> <span>{{ $totalEmployees }}</span></p>
        </div>
        <!-- Add other sections similarly -->
    </div>
    <div class="tableTitle">
        <p>List User</p>
        <form action="{{ route('employees.index') }}" method="get">
            <p>Search : <input type="text" name="search"></p>
        </form>
    </div>
    <div class="tabeluser">
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Access</th>
                <th>Tgl Register</th>
            </tr>
            @foreach ($employees as $index => $employee)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->nama }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->level }}</td>
                <td>{{ $employee->tanggal }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
