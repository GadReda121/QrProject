@extends('layouts.master')

@section('title', 'Medical Information Form')

@section('content')
    <div class="parentForm">
        <div class="infoForm m-auto">
            @include('partials.errors')
            <!-- !Medical Information Form -->
            <!-- *Title -->
            <h2 class="text-center text-uppercase fw-bolder mb-4">Medical Information Form</h2>
            <!-- *Form -->
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="d-flex flex-column">
                    <label class="mb-1">Name</label>
                    <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" required />
                </div>
                <!-- Gender -->
                <div class="d-flex flex-column">
                    <label>Gender</label>
                    <select name="gender" value="{{ old('gender') }}" required>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <!-- Age -->
                <div class="d-flex flex-column">
                    <label>Age</label>
                    <input type="number" class="" placeholder="Age" name="age" value="{{ old('age') }}"
                        required />
                </div>
                <!-- Marital -->
                <div class="d-flex flex-column">
                    <label>Marital Status</label>
                    <select name="marital_status" value="{{ old('marital_status') }}" required>
                        <option value="Single" {{ old('marital_status') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>Married</option>
                        <option value="Divorced" {{ old('marital_status') == 'Divorced' ? 'selected' : '' }}>Divorced
                        </option>
                        <option value="Widowed" {{ old('marital_status') == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                        <option value="Other" {{ old('marital_status') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <!-- ID NUM -->
                <div class="d-flex flex-column">
                    <label>ID Number</label>
                    <input type="text" placeholder="ID Number" name="id_number" value="{{ $id_number }}" required />
                </div>
                <!-- Phone -->
                <div class="d-flex flex-column">
                    <label>Phone Number</label>
                    <input type="tel" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required />
                </div>
                <!-- Your Doc -->
                <div class="d-flex flex-column">
                    <label>Your Doctor</label>
                    <input type="text" placeholder="Your Doctor" name="doctor" value="{{ old('doctor') }}" required />
                </div>
                <!-- Doc phone Num -->
                <div class="d-flex flex-column">
                    <label>Doctor Phone Number</label>
                    <input type="tel" placeholder="Doctor Phone Number" name="doctor_phone"
                        value="{{ old('doctor_phone') }}" required />
                </div>
                <!-- Height -->
                <div class="d-flex flex-column">
                    <label>Height <small>(cm)</small></label>
                    <input type="number" placeholder="Height" name="height" value="{{ old('height') }}" required />
                </div>
                <!-- Weight -->
                <div class="d-flex flex-column">
                    <label> Weight<small>(kg)</small></label>
                    <input type="number" placeholder="Weight" name="weight" value="{{ old('weight') }}" required />
                </div>
                <!-- Blood -->
                <div class="d-flex flex-column">
                    <label>Blood Group</label>
                    <select name="blood" required>
                        <option value="A+" {{ old('blood') == 'A+' ? 'selected' : '' }}>A+</option>
                        <option value="A-" {{ old('blood') == 'A-' ? 'selected' : '' }}>A-</option>
                        <option value="B+" {{ old('blood') == 'B+' ? 'selected' : '' }}>B+</option>
                        <option value="B-" {{ old('blood') == 'B-' ? 'selected' : '' }}>B-</option>
                        <option value="AB+" {{ old('blood') == 'AB+' ? 'selected' : '' }}>AB+</option>
                        <option value="AB-" {{ old('blood') == 'AB-' ? 'selected' : '' }}>AB-</option>
                        <option value="O+" {{ old('blood') == 'O+' ? 'selected' : '' }}>O+</option>
                        <option value="O-" {{ old('blood') == 'O-' ? 'selected' : '' }}>O-</option>
                    </select>
                </div>
                <!-- Caretaker -->
                <div class="d-flex flex-column">
                    <label>Caretaker Phone Number<small>(optional)</small></label>
                    <input type="tel" placeholder="Caretaker Phone Number" name="caretaker_phone"
                        value="{{ old('caretaker_phone') }}" />
                </div>

                <!-- !Patient Medical History -->
                <!-- *Title -->
                <h3 class="mb-0 mt-4 text-capitalize text-center">Patient Medical History</h3>
                <!-- Allergies -->
                <div class="d-flex flex-column">
                    <label>Allergies <small>(include drug allergies)</small></label>
                    <div class="d-flex flex-wrap justify-content-between gap-2">
                        <!-- Penicillin -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Penicillin" name="history[allergies][]"
                                {{ in_array('Penicillin', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Penicillin</label>
                        </div>
                        <!-- Sulfa -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sulfa" name="history[allergies][]"
                                {{ in_array('Sulfa', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Sulfa</label>
                        </div>
                        <!-- Latex -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Latex" name="history[allergies][]"
                                {{ in_array('Latex', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Latex</label>
                        </div>
                        <!-- Pollen -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pollen" name="history[allergies][]"
                                {{ in_array('Pollen', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Pollen</label>
                        </div>
                        <!-- Food -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Food" name="history[allergies][]"
                                {{ in_array('Food', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Food</label>
                        </div>
                        <!-- Cosmetic -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cosmetic" name="history[allergies][]"
                                {{ in_array('Cosmetic', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Cosmetic</label>
                        </div>
                        <!-- Metal -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Metal" name="history[allergies][]"
                                {{ in_array('Metal', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Metal</label>
                        </div>
                        <!-- Sunlight  -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sunlight "
                                name="history[allergies][]"
                                {{ in_array('Sunlight', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Sunlight</label>
                        </div>
                        <!-- Pet -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pet" name="history[allergies][]"
                                {{ in_array('Pet', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Pet</label>
                        </div>
                        <!-- Water  -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Water" name="history[allergies][]"
                                {{ in_array('Water', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Water</label>
                        </div>
                        <!-- Cold or heat   -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ColdOrHot"
                                name="history[allergies][]"
                                {{ in_array('ColdOrHot', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Cold or heat</label>
                        </div>
                        <!-- Others -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Others" name="history[allergies][]"
                                {{ in_array('Others', old('history.allergies') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Others</label>
                        </div>
                    </div>
                </div>
                <!-- Current Medications -->
                <div class="d-flex flex-column">
                    <label>Current Medications</label>
                    <textarea rows="6" placeholder="Current Medications" name="history[current_medications]" required>{{ old('history.current_medications') }}</textarea>
                </div>
                <!-- Immunization -->
                <div class="d-flex flex-column">
                    <label>Immunization</label>
                    <textarea rows="6" placeholder="Immunization" name="history[immunization]" required>{{ old('history.immunization') }}</textarea>
                </div>
                <!-- Family History -->
                <div class="d-flex flex-column">
                    <label>Family History</label>
                    <textarea rows="6" placeholder="Family History" name="history[family_history]" required>{{ old('history.family_history') }}</textarea>
                </div>
                <!-- Medical History -->
                <div class="d-flex flex-column">
                    <!-- Title -->
                    <label class="mb-2">Medical History <small>(chronic illnesses)</small></label>
                    <div class="d-flex flex-wrap justify-content-between gap-1">
                        <!-- Diabetes -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Diabetes"
                                name="history[medical_history][]" {{ in_array('Diabetes', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Diabetes
                            </label>
                        </div>
                        <!-- Heart Disease -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Heart Disease"
                                name="history[medical_history][]" {{ in_array('Heart Disease', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Heart Disease
                            </label>
                        </div>
                        <!-- Stroke -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Stroke"
                                name="history[medical_history][]" {{ in_array('Stroke', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Stroke
                            </label>
                        </div>
                        <!-- Cancer -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Cancer"
                                name="history[medical_history][]" {{ in_array('Cancer', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Cancer
                            </label>
                        </div>
                        <!-- Anemia -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Anemia"
                                name="history[medical_history][]" {{ in_array('Anemia', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Anemia
                            </label>
                        </div>
                        <!-- Arthritis -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Arthritis"
                                name="history[medical_history][]" {{ in_array('Arthritis', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Arthritis
                            </label>
                        </div>
                        <!-- Asthma -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Asthma"
                                name="history[medical_history][]" {{ in_array('Asthma', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Asthma
                            </label>
                        </div>
                        <!-- Epilepsy -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Epilepsy"
                                name="history[medical_history][]" {{ in_array('Epilepsy', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Epilepsy
                            </label>
                        </div>
                        <!-- High Blood Pressure -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="High Blood Pressure"
                                name="history[medical_history][]" {{ in_array('High Blood Pressure', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">High Blood Pressure</label>
                        </div>
                        <!-- Diabetes -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Diabetes"
                                name="history[medical_history][]" {{ in_array('Diabetes', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Diabetes</label>
                        </div>
                        <!-- Asthma -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Asthma"
                                name="history[medical_history][]" {{ in_array('Asthma', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Asthma</label>
                        </div>
                        <!-- Heart Disease -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Heart Disease"
                                name="history[medical_history][]" {{ in_array('Heart Disease', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Heart Disease</label>
                        </div>
                        <!-- Stroke -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Stroke"
                                name="history[medical_history][]" {{ in_array('Stroke', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">Stroke</label>
                        </div>
                        <!-- Thyroid Disease -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Thyroid Disease"
                                name="history[medical_history][]" {{ in_array('Thyroid Disease', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Thyroid Disease
                            </label>
                        </div>
                        <!-- Others -->
                        <div class="form-check d-flex gap-1">
                            <input class="form-check-input" type="checkbox" value="Others"
                                name="history[medical_history][]" {{ in_array('Others', old('history.medical_history') ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Others
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Operations History -->
                <div class="d-flex flex-column">
                    <label>Operations History</label>
                    <textarea rows="6" placeholder="Operations History" name="history[operations_history]" required>{{ old('history.operations_history') }}</textarea>
                </div>
                <!-- Additional Comment -->
                <div class="d-flex flex-column">
                    <label>Additional Comment</label>
                    <textarea rows="6" placeholder="Additional Comment" name="history[additional_comment]">{{ old('history.additional_comment') }}</textarea>
                </div>

                <!-- !Health & Unhealth Habits Form -->
                <!-- *Title -->
                <h3 class="mb-0 mt-4 text-capitalize text-center">Health & Unhealth Habits Form</h3>
                <!-- Exercise -->
                <div class="d-flex flex-column">
                    <label>Exercise</label>
                    <input type="text" placeholder="Enter Exercise Habits" name="habit[exercise]"
                        value="{{ old('habit.exercise') }}" required>
                </div>
                <!-- Eating following a diet -->
                <div class="d-flex flex-column">
                    <label for="diet" class="form-label">Eating following a diet</label>
                    <input type="text" placeholder="Enter Eating Habits" name="habit[eating_following_a_diet]"
                        value="{{ old('habit.eating_following_a_diet') }}" required>
                </div>
                <!-- Alcohol consumption -->
                <div class="d-flex flex-column">
                    <label>Alcohol consumption</label>
                    <input type="text" placeholder="Enter Alcohol Consumption habits"
                        name="habit[alcohol_consumption]" value="{{ old('habit.alcohol_consumption') }}" required>
                </div>
                <!-- Caffeine consumption -->
                <div class="d-flex flex-column">
                    <label>Caffeine consumption</label>
                    <input type="text" placeholder="Enter caffeine consumption habits"
                        name="habit[caffeine_consumption]" value="{{ old('habit.caffeine_consumption') }}" required>
                </div>
                <!-- Do you smoke? -->
                <div class="d-flex flex-column">
                    <label>Do you smoke?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="habit[is_smoke]"
                            {{ old('habit.is_smoke') == 1 ? 'checked' : '' }} required>
                        <label>
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="habit[is_smoke]"
                            {{ old('habit.is_smoke') == 0 ? 'checked' : '' }} required>
                        <label>
                            No
                        </label>
                    </div>
                </div>
                <!-- !BTN => Submit -->
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/js/index.js"></script>
@endsection
