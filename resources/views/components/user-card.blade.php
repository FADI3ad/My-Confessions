@php
    if ($gender=='male')
        $person_emoji = '👦';

    else
        $person_emoji = '👧';
@endphp
<div class="user-card">
   <img src="{{ asset($photo) }}" alt="User Photo" style="width: 100px;">

   <div class="user-info">

        <a href="{{ route('confessions.show', $slug) }}" class="text-decoration-none text-dark">
            <h5>{{ $person_emoji }}{{ $name }}</h5>
        </a>

       <h6 class="phone">📞 {{ $phone }}</h6>
       <h6 class="date">🗓️ {{ \Carbon\Carbon::parse($dob)->format('d M Y') }}</h6>
   </div>

   <div class="actions d-flex gap-2">
       <button><i class="fas fa-edit"></i></button>

       <form action="{{ route('confessions.destroy', $slug) }}" method="POST" class="delete-form">
           @csrf
           @method('DELETE')
           <button type="button" class="btn btn-link p-0 m-0 delete-btn">
               <i class="fas fa-trash-alt text-danger"></i>
           </button>
       </form>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function (e) {
        const form = this.closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to undo this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});

</script>

