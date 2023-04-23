@extends('layout')
@section('title', "Add conference")
@section('content')
    <form action="/add" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter name"> <br> <br>
        <input type="text" name="description" placeholder="Enter description"> <br> <br>
        <input type="text" name="address" placeholder="Enter address"> <br> <br>
        <input type="date" name="date"> <br> <br>
        <button type="submit">Create</button>
    </form>
@endsection
