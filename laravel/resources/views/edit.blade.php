@extends('layout')
@section('title', "Edit conferences")
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
        <form action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">
            <input type="text" name="name" value="{{$data['name']}}"> <br> <br>
            <input type="text" name="description" value="{{$data['description']}}"> <br> <br>
            <input type="text" name="address" value="{{$data['address']}}"> <br> <br>
            <input type="date" name="date" value="{{$data['date']}}"> <br> <br>
            <button type="submit">Update</button>
        </form>
@endsection
