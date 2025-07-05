@extends('master')
@section('title', 'Birthdays')
@section('csspath','allserved')
@section('birthdays-active', 'active')


@section('content')
    <main>
        <div class="container mt-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 animate-fade-up">
                <x-subtitle-component subtitle="Birthdays 🎇"></x-subtitle-component>
                <span id="confessorsCount" class="badge bg-primary text-white fs-5 px-4 py-2 rounded-pill shadow-sm">
                TOTAL : 0
                </span>
            </div>
        </div>
        <div class="d-flex flex-row flex-wrap align-items-center mb-4 justify-content-between animate-fade-up">
        <!-- Search Input -->
            <div class="me-2 mb-2 flex-grow-1">
                <input type="text" class="form-control shadow-sm search-input" placeholder="Search confessors..." id="searchInput">
            </div>

            <!-- Dropdown -->
            <div class="mb-2" style="min-width: 150px;">
                <select class="form-select shadow-sm filter-select" id="statusFilter">
                    <option value="all" selected>All</option>
                    <option value="active">Active</option>
                    <option value="offline">Offline</option>
                </select>
            </div>
        </div>

        <div class="card-list" id="userCards">
            <div class="user-card">
                <img src="https://i.imgur.com/U0Zr6zH.png" alt="">
                <div class="user-info">
                <h6>Jane Cooper</h6>
                </div>
                <div class="actions">
                <button><i class="fas fa-edit"></i></button>
                <button><i class="fas fa-trash-alt text-danger"></i></button>
                </div>
            </div>

            <div class="user-card">
                <img src="https://i.imgur.com/1X8zWbF.png" alt="">
                <div class="user-info">
                <h6>Wade Warren</h6>
                <p>0128554</p>
                </div>
                <div class="actions">
                <button><i class="fas fa-edit"></i></button>
                <button><i class="fas fa-trash-alt text-danger"></i></button>
                </div>
            </div>
        </div>
    </main>
@endsection
