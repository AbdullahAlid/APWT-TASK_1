@extends('layouts.app')

@section('contents')
<div align="center">
    <a href="{{route('team')}}">Our Teams</a>
    <a href="{{route('about')}}">About Us</a>
    <a href="{{route('contact')}}">Contact Us</a>
</div>

    <p>About us.</p>
    <ul>
        <li>Rahim, Email:rahim@yahoo.com</li>
        <li>Karim, Emil:karim@gmail.com</li>
        <li>Fahim, Email:fahim@gmail.com</li>
    </ul>
@endsection