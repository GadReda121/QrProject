@extends('layouts.master')

@section('title', $user->name)

@section('content')
    <!-- Parent -->
    <div class="parentCv">
        <div class="cvProfile m-auto">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <!-- Img Profile -->
                        <div class="d-flex">
                            <img src="/assets/Images/profile.png" alt="{{ $user->name }}">
                        </div>
                        <!-- Your Name -->
                        <h1 class="fw-bold">{{ $user->name }}</h1>

                        <!-- My Info -->
                        <h4>Info</h4>
                        <div class="effect">
                            <ul>
                                <li>Gender: {{ $user->gender }}</li>
                                <li>Age: {{ $user->age }}</li>
                                <li>Marital Status: {{ $user->marital_status }}</li>
                                <li>ID Number : {{ $user->id_number }}</li>
                                <li>Phone: {{ $user->phone }}</li>
                                <li>Doctor: {{ $user->doctor }}</li>
                                <li>Doctor Phone: {{ $user->doctor_phone }}</li>
                                <li>Height: {{ $user->height }}</li>
                                <li>Weight: {{ $user->weight }}</li>
                                <li>Blood: {{ $user->blood }}</li>
                                @if ($user->caretaker_phone)
                                    <li>Caretaker Phone: {{ $user->caretaker_phone }}</li>
                                @endif
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h4>Patient Medical History</h4>
                        <div class="effect">
                            <ul>
                                <li>Allergies (include drug allergies)
                                    <ul>
                                        @foreach ($user->history->allergies as $allergy)
                                            <li>{{ $allergy }}</li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>Current Medications: {{ $user->history->current_medications }}</li>
                                <li>Immunization: {{ $user->history->immunization }}</li>
                                <li>Family History: {{ $user->history->family_history }}</li>
                                <li>Medical History (chronic illnesses)
                                    <ul>
                                        @foreach ($user->history->medical_history as $history)
                                            <li>{{ $history }}</li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>Operations History: {{ $user->history->operations_history }}</li>
                                <li>Additional Comment: {{ $user->history->additional_comment }}</li>
                            </ul>
                        </div>

                        <h4>Health & Unhealth Habits Form</h4>
                        <div class="effect">
                            <ul>
                                <li>Exercise: {{ $user->habit->exercise }}</li>
                                <li>Eating following a diet: {{ $user->habit->eating_following_a_diet }}</li>
                                <li>Alcohol consumption: {{ $user->habit->alcohol_consumption }}</li>
                                <li>Caffeine consumption: {{ $user->habit->caffeine_consumption }}</li>
                                <li>Do you smoke? {{ $user->habit->is_smoke == 1 ? 'Yes' : 'No' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
