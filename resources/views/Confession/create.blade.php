@extends('master')
@section('csspath', 'newserved')
@section('title', 'Confessor Registration')
@section('addnewserved-active', 'active')
@section('content')
    <main>
        <div class="form-container">
            <form action="{{ route('confessions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>Confessor Registration 🙋‍♂️</h2>

                <!-- البيانات الشخصية -->
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="First Middle Last"
                        value="{{ old('fullname') }}" />
                </div>

                <!-- حقل الكود الجديد -->
                <div class="form-group">
                    <label for="confession_code">Confession Code</label>
                    <input type="text" id="confession_code" name="confession_code" class="form-control"
                        placeholder="e.g. MHN" value="{{ old('confession_code') }}" />
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="form-control" required
                            value="{{ old('dob') }}" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" required>
                            <option value="">-- Select Gender --</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>

                <!-- التواصل والعنوان -->
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone_number" class="form-control"
                        placeholder="e.g. 01012345678" required value="{{ old('phone_number') }}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="2" class="form-control"
                        placeholder="e.g. 123 Street Name, City, Governorate" required>{{ old('address') }}</textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="status">Marital Status</label>
                        <select id="status" name="marital_status" class="form-control" required>
                            <option value="">-- Select Status --</option>
                            <option value="single" {{ old('marital_status') == 'single' ? 'selected' : '' }}>Single</option>
                            <option value="married" {{ old('marital_status') == 'married' ? 'selected' : '' }}>Married
                            </option>
                            <option value="divorced" {{ old('marital_status') == 'divorced' ? 'selected' : '' }}>Divorced
                            </option>
                            <option value="widowed" {{ old('marital_status') == 'widowed' ? 'selected' : '' }}>Widowed
                            </option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="work">Work</label>
                        <input type="text" id="work" name="work" class="form-control"
                            placeholder="e.g. Engineer, Student" value="{{ old('work') }}" />
                    </div>
                </div>

                <!-- المواهب والخدمة -->
                <div class="form-group">
                    <label for="talents">Talents</label>
                    <textarea id="talents" name="talents" rows="3" class="form-control"
                        placeholder="e.g. singing, acting, drawing...">{{ old('talents') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="service">Service Type</label>
                    <select id="service" name="service_type" class="form-control" required>
                        <option value="">-- Select Service --</option>
                        <option value="child" {{ old('service_type') == 'child' ? 'selected' : '' }}>Children</option>
                        <option value="Preparatory" {{ old('service_type') == 'Preparatory' ? 'selected' : '' }}>
                            Preparatory</option>
                        <option value="Secondary" {{ old('service_type') == 'Secondary' ? 'selected' : '' }}>Secondary
                        </option>
                        <option value="Youth" {{ old('service_type') == 'Youth' ? 'selected' : '' }}>Youth</option>
                        <option value="Adult" {{ old('service_type') == 'Adult' ? 'selected' : '' }}>Adult</option>
                    </select>
                </div>

                <div class="form-group form-check">
                    <input type="hidden" name="is_deacon" value="0">
                    <input type="checkbox" class="form-check-input" id="deacon" name="is_deacon" value="1"
                        {{ old('is_deacon') ? 'checked' : '' }}>
                    <label class="form-check-label" for="deacon">Is a Deacon?</label>
                </div>

                <!-- رفع الصورة -->
                <div class="form-group">
                    <label for="photo">Upload Photo</label>
                    <input type="file" id="photo" name="photo" class="form-control-file" accept="image/*">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- زر الإرسال -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </main>
@endsection
