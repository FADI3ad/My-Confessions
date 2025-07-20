@extends('master')
@section('title', 'Latecomers')
@section('csspath','servedinfo')


@php
    use Carbon\Carbon;
@endphp
@section('content')
<main>
   <div class="profile-card">
    <div class="profile-header">
      <h2 style="color: white">{{ $confession->fullname }}</h2>
      <p style="color: white">{{ $confession->service_type }}</p>
    </div>

    <div class="profile-content">
      <div class="profile-image">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile Photo">
      </div>

      <div class="profile-info">
        <div class="info-item">
          <span class="info-icon"><i class="fas fa-calendar-day"></i></span>
          <span class="info-label">Age:</span>
          <span>{{ Carbon::parse($confession->dob)->age }}</span>
        </div>

        <div class="info-item">
          <span class="info-icon"><i class="fas fa-venus-mars"></i></span>
          <span class="info-label">Gender:</span>
          <span>{{ $confession->gender }}</span>
        </div>

        <div class="info-item">
          <span class="info-icon"><i class="fas fa-birthday-cake"></i></span>
          <span class="info-label">Birthdate:</span>
          <span>{{ $confession->dob }}</span>
        </div>

        <div class="info-item">
          <span class="info-icon"><i class="fas fa-briefcase"></i></span>
          <span class="info-label">Occupation:</span>
          <span>Engineer</span>
        </div>

        <div class="info-item">
          <span class="info-icon"><i class="fas fa-clock"></i></span>
          <span class="info-label">Last Visit:</span>
          <span>{{ $confession->lastvisit  }}</span>
        </div>

        <div class="info-item">
          <span class="info-icon"><i class="fas fa-id-card"></i></span>
          <span class="info-label">Cf-code</span>
          <span>#M2025-042</span>
        </div>
      </div>
    </div>
  </div>



</main>
@endsection
