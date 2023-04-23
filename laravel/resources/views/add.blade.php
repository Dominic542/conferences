@extends('layout')
@section('title', "Add conference")
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <form action="/add" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter name"> <br> <br>
            <input type="text" name="description" placeholder="Enter description"> <br> <br>
            <input type="text" name="address" placeholder="Enter address"> <br> <br>
            <input type="date" name="date"> <br> <br>
            <button type="submit">Create</button>
        </form>
@endsection
