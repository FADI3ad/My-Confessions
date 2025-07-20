@extends('master')
@section('title', 'Latecomers')
@section('csspath','allserved')
@section('late-active', 'active')


@section('content')
<main>


    <x-page-header title="Latecomers 🕒" :total="0" />


    <!-- Filter Form -->
    <x-filter-form>
        <!-- Service Type -->
        <div class="col">
            <label for="statusFilter" class="custom-filter-label">📘 Service Type</label>
            <select name="status" class="form-select custom-filter-select" id="statusFilter">
                <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All</option>
                <option value="child" {{ request('status') == 'child' ? 'selected' : '' }}>Children</option>
                <option value="Preparatory" {{ request('status') == 'Preparatory' ? 'selected' : '' }}>Preparatory</option>
                <option value="Secondary" {{ request('status') == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                <option value="Youth" {{ request('status') == 'Youth' ? 'selected' : '' }}>Youth</option>
                <option value="Adult" {{ request('status') == 'Adult' ? 'selected' : '' }}>Adult</option>
            </select>
        </div>

        <!-- Gender -->
        <div class="col">
            <label for="groupFilter" class="custom-filter-label">👤 Gender</label>
            <select class="form-select custom-filter-select" id="groupFilter" name="group">
                <option value="all" {{ request('group') == 'all' ? 'selected' : '' }}>All</option>
                <option value="male" {{ request('group') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ request('group') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <!-- Marital Status -->
        <div class="col">
            <label for="monthFilter" class="custom-filter-label">💍 Marital Status</label>
            <select class="form-select custom-filter-select" id="monthFilter" name="month">
                <option value="all" {{ request('month') == 'all' ? 'selected' : '' }}>All</option>
                <option value="single" {{ request('month') == 'single' ? 'selected' : '' }}>Single</option>
                <option value="married" {{ request('month') == 'married' ? 'selected' : '' }}>Married</option>
                <option value="divorced" {{ request('month') == 'divorced' ? 'selected' : '' }}>Divorced</option>
                <option value="widowed" {{ request('month') == 'widowed' ? 'selected' : '' }}>Widowed</option>
            </select>
        </div>

        <!-- Age -->
        <div class="col">
            <label for="ageRange" class="custom-filter-label">🎂 Age</label>
            <select class="form-select custom-filter-select" id="ageRange" name="age_range">
                <option value="all" {{ request('age_range') == 'all' ? 'selected' : '' }}>All</option>
                <option value="child" {{ request('age_range') == 'child' ? 'selected' : '' }}>Under 18</option>
                <option value="young" {{ request('age_range') == 'young' ? 'selected' : '' }}>18-30</option>
                <option value="adult" {{ request('age_range') == 'adult' ? 'selected' : '' }}>31-50</option>
                <option value="senior" {{ request('age_range') == 'senior' ? 'selected' : '' }}>50+</option>
            </select>
        </div>

        <!-- Is Deacon -->
        <div class="col">
            <label for="deaconFilter" class="custom-filter-label">⛪ Is a Deacon?</label>
            <select class="form-select custom-filter-select" id="deaconFilter" name="is_deacon">
                <option value="all" {{ request('is_deacon') == 'all' ? 'selected' : '' }}>All</option>
                <option value="1" {{ request('is_deacon') == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ request('is_deacon') == '0' ? 'selected' : '' }}>No</option>
            </select>
        </div>
    </x-filter-form>



    <div class="card-list" id="userCards">

    @foreach ($confessions as $confession)
        @php
            $photoUrl = asset($confession->photo);
        @endphp
        <x-user-card

            :photo="$photoUrl"
            :name="$confession->fullname"
            :phone="$confession->phone_number"
            :dob="$confession->dob"
            :slug="$confession->slug"
            :gender="$confession->gender"
        />
    @endforeach

    </div>

</main>
@include('partials.filter_responseve_script')
@endsection
