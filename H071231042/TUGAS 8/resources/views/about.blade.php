<!-- resources/views/about.blade.php -->
@extends('layouts.master')

@section('title', 'about')

@section('content')
    <h2>About Us</h2>
    <p>SELAMAT DATANG DI WEBSITE SAYA</p>
    <p> Perkenalkan nama saya Muslih Khairu Alief Rahman Asal saya Kalimantan Timur </p>
    <a href="{{ route('contact') }}" class="button">Contact Us</a>
@endsection
