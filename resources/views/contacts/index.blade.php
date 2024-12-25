@extends('layouts.master')

@section('content')
    <div class="table-responsive p-2">
        @forelse ($contacts as $contact)
            <div class="contact-item">
                <h2>{{ $contact['name'] }}</h2>
                <p>{{ $contact['email'] }}</p>
            </div>
        @empty
            <p>No contacts available.</p>
        @endforelse
    </div>
@endsection