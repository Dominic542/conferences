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
            <td>{{__('msg.id')}}</td>
            <td>{{__('msg.name')}}</td>
            <td>{{__('msg.description')}}</td>
            <td>{{__('msg.address')}}</td>
            <td>{{__('msg.date')}}</td>
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
                        <a href={{"delete/".$conference['id']}}>{{__('msg.delete')}}</a>
                        <a href={{"edit/".$conference['id']}}>{{__('msg.edit')}}</a>
                    </td>
                @endauth
            </tr>
        @endforeach
    </table>
    <td>
        @auth
            <form action="http://127.0.0.1:8000/add">
                <button type="submit">{{__('msg.create new conference')}}</button>
            </form>
        @endauth
    </td>
@endsection
