@extends('layouts.main')
@section('content')
<h1>PPPP</h1>
@foreach($data as $d)
    <p>{{$d}}</p>
@endforeach
@endsection
