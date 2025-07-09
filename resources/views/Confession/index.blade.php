@extends('master')
@section('csspath', 'allserved')
@section('title', 'All Served')
@section('allserved-active', 'active')
@section('content')
    <main>
       <main class="pb-5">
        <div class="container mt-4">
            <h2 class="mb-3 mb-md-0 text-center fw-bold text-dark">All Served ✅</h2>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 animate-fade-up">
                <div class="d-flex justify-content-between w-100">
                    <span id="confessorsCount" class="badge bg-primary text-white fs-5 px-4 py-2 rounded-pill shadow-sm">
                        TOTAL : 0
                    </span>
                    <button id="filterToggleBtn" class="btn btn-primary d-md-none">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
           <form id="filterForm" class="p-3 p-md-4 rounded-4 shadow-sm animate-fade-up bg-white mb-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-3 align-items-end">

        <!-- Search -->
        <div class="col">
            <label for="searchInput" class="form-label fw-semibold">🔍 Search</label>
            <input type="text" class="form-control search-input" id="searchInput" name="search" placeholder="e.g. John">
        </div>

        <!-- Status -->
        <div class="col">
            <label for="statusFilter" class="form-label fw-semibold">🟢 Status</label>
            <select class="form-select" id="statusFilter" name="status">
                <option value="all">All</option>
                <option value="active">Active</option>
                <option value="offline">Offline</option>
            </select>
        </div>

        <!-- Group -->
        <div class="col">
            <label for="groupFilter" class="form-label fw-semibold">👥 Group</label>
            <select class="form-select" id="groupFilter" name="group">
                <option value="all">All</option>
                <option value="choir">Choir</option>
                <option value="scouts">Scouts</option>
                <option value="media">Media</option>
            </select>
        </div>

        <!-- Month -->
        <div class="col">
            <label for="monthFilter" class="form-label fw-semibold">📅 Month</label>
            <select class="form-select" id="monthFilter" name="month">
                <option value="all">All</option>
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ \Carbon\Carbon::create()->month($i)->format('F') }}</option>
                @endfor
            </select>
        </div>

        <!-- Age -->
        <div class="col">
            <label for="ageRange" class="form-label fw-semibold">🎂 Age</label>
            <select class="form-select" id="ageRange" name="age_range">
                <option value="all">All</option>
                <option value="child">Under 18</option>
                <option value="young">18-30</option>
                <option value="adult">31-50</option>
                <option value="senior">50+</option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="col d-flex gap-2">
            <button type="submit" class="btn btn-primary w-100">
                <i class="fas fa-filter me-1 d-none d-md-inline"></i>
                <span class="d-none d-md-inline">Filter</span>
                <span class="d-inline d-md-none"><i class="fas fa-check"></i></span>
            </button>
            <button type="reset" class="btn btn-outline-secondary w-100">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
</form>

        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 g-md-4" id="userCards">
                <!-- User Card 1 -->
                <div class="col m-2" >
                    <div class="user-card h-100">
                        <div class="d-flex align-items-center w-100">
                            <img src="https://i.imgur.com/U0Zr6zH.png" alt="Profile" class="flex-shrink-0">
                            <div class="user-info flex-grow-1 ms-3">
                                <h6 class="mb-1">Jane Cooper</h6>
                                <small class="text-muted">June 15</small>
                            </div>
                        </div>
                        <div class="actions mt-2 mt-md-0">
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </div>

                <!-- User Card 2 -->
                <div class="col m-2" >
                    <div class="user-card h-100">
                        <div class="d-flex align-items-center w-100">
                            <img src="https://i.imgur.com/1X8zWbF.png" alt="Profile" class="flex-shrink-0">
                            <div class="user-info flex-grow-1 ms-3">
                                <h6 class="mb-1">Wade Warren</h6>
                                <small class="text-muted">July 22</small>
                            </div>
                        </div>
                        <div class="actions mt-2 mt-md-0">
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
