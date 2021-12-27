@extends('layout')

@section('isi')
    <h1>CUSTOMER</h1>

    <ul>
        @foreach ($pelanggan as $customer)
        <li>{{ $customer }}</li>
        @endforeach
    </ul>

@endsection