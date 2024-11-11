<!-- resources/views/home.blade.php -->
@extends('layouts.master')

@section('title', 'home')
@section('content')
    <h2>Hi, I'm Muslih Khairu Alief Rahman</h2>
    <p>Selamat Datang Di Praktikum Basic Laravel</p>
    <a href="{{ route('about') }}" class="button">Learn more About Us</a>
@endsection
