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
            </tr>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{$conference['id']}}</td>
                    <td>{{$conference['name']}}</td>
                    <td>{{$conference['description']}}</td>
                    <td>{{$conference['address']}}</td>
                    <td>{{$conference['date']}}</td>
                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                </tr>
            @endforeach
        </table>
        <td><button type="submit" class="btn btn-primary">Create new conference</button></td>
@endsection
