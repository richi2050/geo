@extends('layouts.default')
@section('css')
<link rel="stylesheet" href="{{ asset('boostrap/dist/css/theme.css') }}"/>
@stop


@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>user</th>
            <th>option</th>
        </tr>
    </thead>
    <tbody>
@foreach($user as $us)
    <tr>
        <td>{{ $us->id  }}</td>
        <td>{{ $us->name }}</td>
        <td>{{ $us->user }}</td>
        <td>
        <a href="{{ URL::to('edit',$us->id)}}">Editar</a>|
        <a href="">Eliminar</a>
        </td>
    </tr>

@endforeach

      <tr>
            <td colspan="3">

                {{$user->links()}}
            </td>
      </tr>
      </tbody>
</table>

@stop