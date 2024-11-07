@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<section class="contact bg-gray-100 py-12" id="contact">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl text-purple-500 font-bold mb-6">Contact Us</h1>

        <div class="contact-info text-gray-700 mb-6">
            <p><i class="fas fa-phone-alt"></i> <strong>Phone:</strong> +123 456 7890</p>
            <p><i class="fas fa-envelope"></i> <strong>Email:</strong> info@example.com</p>
            <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 123 Main Street, City, Country</p>
        </div>

        <div class="contact-form">
            <form action="/submit" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

        <!-- Map Embed Section -->
        <div class="map-embed">
            <iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>


@endsection
