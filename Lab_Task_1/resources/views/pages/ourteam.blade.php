@extends('layouts.app')

@section('contents')
<div align="center">
    <a href="{{route('home')}}">Home Page</a>
    <a href="{{route('service')}}">Service Page</a>
    <a href="{{route('team')}}">Contact page</a>
</div>
<div align="center">
    <a href="{{route('team')}}">Our Teams</a>
    <a href="{{route('about')}}">About Us</a>
    <a href="{{route('contact')}}">Contact Us</a>
</div>
</div>

    <p>This is our team.</p>
    <ul>
        <li>Rahim</li>
        <li>Karim</li>
        <li>Fahim</li>
    </ul>
@endsection