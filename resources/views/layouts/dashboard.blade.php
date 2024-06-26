@extends('layouts.app')

@section('content')
<div class="container">
    <div class="hero-image">
        <img src="{{ asset('images/homeimage.jpg') }}" alt="Room Image">
        <div class="hero-text">
            <h1>Find Your Best Room!</h1>
            <p>Provides many rooms for your needs.</p>
            <a href="{{ url('/about') }}" class="btn btn-primary">Details</a>
        </div>
    </div>

    <div class="rooms">
        <h3>Rooms</h3>
        <div class="room-grid">
            <div class="room">
                <img src="{{ asset('images/auditorium.jpg') }}" alt="Auditorium">
                <h4>Auditorium</h4>
                <a href="{{ route('room.details', ['id' => 1]) }}" class="btn btn-secondary">Details</a>
            </div>
            <div class="room">
                <img src="{{ asset('images/aula_student_center.jpg') }}" alt="Aula Student Center">
                <h4>Aula Student Center</h4>
                <a href="{{ route('room.details', ['id' => 2]) }}" class="btn btn-secondary">Details</a>
            </div>
            <div class="room">
                <img src="{{ asset('images/javanologi.jpg') }}" alt="Javanologi">
                <h4>Javanologi</h4>
                <a href="{{ route('room.details', ['id' => 3]) }}" class="btn btn-secondary">Details</a>
            </div>
            <div class="room">
                <img src="{{ asset('images/gedung_olahraga.jpg') }}" alt="Gedung Olahraga">
                <h4>Gedung Olahraga</h4>
                <a href="{{ route('room.details', ['id' => 4]) }}" class="btn btn-secondary">Details</a>
            </div>
            <div class="room">
                <img src="{{ asset('images/consultation_room.jpg') }}" alt="Consultation Room">
                <h4>Consultation Room</h4>
                <a href="{{ route('room.details', ['id' => 5]) }}" class="btn btn-secondary">Details</a>
            </div>
            <div class="room">
                <img src="{{ asset('images/event_space.jpg') }}" alt="Event Space">
                <h4>Event Space</h4>
                <a href="{{ route('room.details', ['id' => 6]) }}" class="btn btn-secondary">Details</a>
            </div>
        </div>
    </div>
</div>
@endsection
