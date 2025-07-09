<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterToggleBtn = document.getElementById('filterToggleBtn');
    const filterForm = document.getElementById('filterForm');

    filterToggleBtn.addEventListener('click', function() {
        filterForm.classList.toggle('show');

        // تغيير الأيقونة حسب حالة الفورم
        const icon = this.querySelector('i');
        if (filterForm.classList.contains('show')) {
            icon.classList.remove('fa-filter');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-filter');
        }
    });

    // إخفاء الفورم عند تغيير حجم الشاشة إذا أصبحت كبيرة
    function handleResize() {
        if (window.innerWidth >= 768) {
            filterForm.classList.remove('show');
            const icon = filterToggleBtn.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-filter');
        }
    }

    window.addEventListener('resize', handleResize);
});
</script>
