@extends('layout')
@section('title', "Edit conferences")
@section('content')
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
