@extends('master')
@section('title', 'Birthdays')
@section('csspath','allserved')
@section('birthdays-active', 'active')

@section('content')
<main>


    <x-page-header title="Birthdays 🎉" :total="0" />


    <!-- Filter Form -->
    <x-filter-form>
        <!-- Service Type -->
        <div class="col">
            <label for="statusFilter" class="custom-filter-label">📘 Service Type</label>
            <select class="form-select custom-filter-select" id="statusFilter" name="status">
                <option value="all">All</option>
                <option value="child">Children</option>
                <option value="Preparatory">Preparatory</option>
                <option value="Secondary">Secondary</option>
                <option value="Youth">Youth</option>
                <option value="Adult">Adult</option>
            </select>
        </div>

        <!-- Gender -->
        <div class="col">
            <label for="groupFilter" class="custom-filter-label">👤 Gender</label>
            <select class="form-select custom-filter-select" id="groupFilter" name="group">
                <option value="all">All</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <!-- Marital Status -->
        <div class="col">
            <label for="monthFilter" class="custom-filter-label">💍 Marital Status</label>
            <select class="form-select custom-filter-select" id="monthFilter" name="month">
                <option value="all">All</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select>
        </div>

        <!-- Age -->
        <div class="col">
            <label for="ageRange" class="custom-filter-label">🎂 Age</label>
            <select class="form-select custom-filter-select" id="ageRange" name="age_range">
                <option value="all">All</option>
                <option value="child">Under 18</option>
                <option value="young">18-30</option>
                <option value="adult">31-50</option>
                <option value="senior">50+</option>
            </select>
        </div>

        <!-- Is Deacon -->
        <div class="col">
            <label for="deaconFilter" class="custom-filter-label">⛪ Is a Deacon?</label>
            <select class="form-select custom-filter-select" id="deaconFilter" name="is_deacon">
                <option value="all">All</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
    </x-filter-form>



    <div class="card-list" id="userCards">

        @foreach ($confessions as $confession)
            <x-user-card :photo="$confession->photo" :name="$confession->fullname" :phone="$confession->phone_number" :dob="$confession->dob" />
        @endforeach

    </div>

</main>
@endsection



