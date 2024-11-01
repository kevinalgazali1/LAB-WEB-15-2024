@extends('master')

@section('title', 'Contact Us')

@section('banner-content')

    <div class="contact-container">
        <div class="header-logo">
            <img src="{{ asset('images/M.png') }}" alt="Marvel Logo">
        </div>

        @include('components.notification')

        <div class="contact-wrapper">
            <h2>Enter Your Email to Contact Us</h2>
            <p class="sub-text">Log in to Marvel with your account. If you don't have one, you will be prompted to create one.</p>
            
            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit" class="contact-button">Send Message</button>
            </form>
            
            <div class="disclaimer">
                Marvel is part of The Walt Disney Family of Companies. <br>
                By continuing, you agree to our terms and conditions.
            </div>
        </div>
    </div>
@endsection
