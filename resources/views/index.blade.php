@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <!-- Parent -->
    <div class="parent">
        @include('partials.errors')
        <!-- Sign in -->
        <div class="signIn m-auto">
            <div class="logo mb-4">
                <img src="/assets/Images/logo.png" alt="" />
            </div>
            <h2 class="text-center text-uppercase fw-bolder">Sign In</h2>
            <!-- form -->
            <form action="{{ route('create') }}" method="GET">
                @csrf
                <!-- input -->
                <div class="d-grid mb-1">
                    <label class="mb-1">ID Number</label>
                    <input type="text" placeholder="Your ID Number" name="id_number" required/>
                </div>
                <!-- forget pw -->
                {{-- <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <label class="d-flex align-items-center gap-1">
                        <input type="checkbox" />
                        Remember Me
                    </label>
                    <!-- Forget -->
                    <a href="">Forget Password?</a>
                </div> --}}
                <button type="submit">Continue</button>
            </form>
        </div>
    </div>
@endsection
