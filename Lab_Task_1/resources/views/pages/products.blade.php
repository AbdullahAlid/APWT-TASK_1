@extends('layouts.app')

@section('contents')
<div align="center">
    <a href="{{route('home')}}">Home Page</a>
    <a href="{{route('service')}}">Service Page</a>
    <a href="{{route('team')}}">Contact page</a>
</div>
<ul>
@foreach ($data as $d)
    <li>{{$d}}</li>
@endforeach
</ul>   
@endsection