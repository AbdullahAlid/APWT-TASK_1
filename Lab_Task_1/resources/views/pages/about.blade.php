@extends('layouts.app')

@section('contents')
<div align="center">
    <a href="{{route('team')}}">Our Teams</a>
    <a href="{{route('about')}}">About Us</a>
    <a href="{{route('contact')}}">Contact Us</a>
</div>

    <p>About us.</p>
    <ul>
        <li>Rahim,Bsc from AIUB</li>
        <li>Karim,Bsc from AIUB</li>
        <li>Fahim,Bsc from AIUB</li>
    </ul>
@endsection