







<form action="{{ route('theme.test') }}" method="GET" id="filterForm" class="p-3 p-md-4 rounded-4 shadow-sm animate-fade-up mb-4">

    <!-- Search ثابت -->
    <div class="col mb-4">
        <label for="searchInput" class="form-label fw-semibold">🔍 Search</label>
        <input type="text" class="form-control search-input" id="searchInput" name="search" placeholder="e.g. John">
    </div>

    <!-- Collapse Filters -->
    <div class="collapse d-md-block" id="filtersCollapse">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-3 align-items-end">

            <!-- هنا بنحط كل الفلاتر -->
            {{ $slot }}

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
    </div>
</form>
