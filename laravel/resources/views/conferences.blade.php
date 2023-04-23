<style>
    td {
        padding: 5px;
    }
</style>
@extends('layout')
@section('title', "Conferences")
@section('content')
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>description</td>
            <td>address</td>
            <td>date</td>
            @auth
                <td>Operations</td>
            @endauth
        </tr>
        @foreach($conferences as $conference)
            <tr>
                <td>{{$conference['id']}}</td>
                <td>{{$conference['name']}}</td>
                <td>{{$conference['description']}}</td>
                <td>{{$conference['address']}}</td>
                <td>{{$conference['date']}}</td>
                @auth
                    <td>
                        <a href={{"delete/".$conference['id']}}>Delete</a>
                        <a href={{"edit/".$conference['id']}}>Edit</a>
                    </td>
                @endauth
            </tr>
        @endforeach
    </table>
    <td>
        @auth
            <form action="http://127.0.0.1:8000/add">
                <button type="submit">Create new conference</button>
            </form>
        @endauth
    </td>
@endsection
