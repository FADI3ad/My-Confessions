<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('filterToggleBtn');
        const filtersCollapse = document.getElementById('filtersCollapse');

        toggleBtn.addEventListener('click', function () {
            filtersCollapse.classList.toggle('show'); // يظهر أو يخفي الفلاتر

            // ✅ لو عايز تغير الأيقونة كمان:
            const icon = toggleBtn.querySelector('i');
            if (filtersCollapse.classList.contains('show')) {
                icon.classList.remove('fa-filter');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-filter');
            }
        });
    });
</script>
