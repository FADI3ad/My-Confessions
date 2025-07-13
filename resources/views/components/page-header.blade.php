<div class="container mt-4">
    <h2 class="mb-3 mb-md-0 text-center fw-bold text-dark">{{ $title }}</h2>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3 animate-fade-up">
        <div class="d-flex justify-content-between w-100">
            <span class="badge bg-primary text-white fs-5 px-4 py-2 rounded-pill shadow-sm">
                TOTAL : {{ $total }}
            </span>
            <button id="filterToggleBtn" class="btn btn-primary d-md-none">
                <i class="fas fa-filter"></i>
            </button>
        </div>
    </div>
</div>
