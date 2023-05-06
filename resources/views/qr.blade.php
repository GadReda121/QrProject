@extends('layouts.master')

@section('title', $user->name)

@section('content')
    <!-- Parent -->
    <div class="parent">
        <!-- Sign in -->
        <div class="Qr m-auto">
            <!-- Qr Code -->
            <div class="qrCode d-flex flex-column justify-content-center align-items-center p-4">
                {!! $qr !!}
                <!-- Title -->
                <h3 class="fw-bold mt-2">QR Code</h3>
            </div>

        </div>
    </div>
@endsection
