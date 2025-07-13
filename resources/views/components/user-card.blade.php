<div class="user-card">
   <img src="{{ asset($photo) }}" alt="Photo">

    <h1>{{ asset('storage/' . $photo) }}</h1>

    <div class="user-info">
        <h6>🙍 {{ $name }}</h6>
        <h6>📞 {{ $phone }}</h6>
        <h6>🗓️ {{ \Carbon\Carbon::parse($dob)->format('d M Y') }}</h6>
    </div>

    <div class="actions">
        <button><i class="fas fa-edit"></i></button>
        <button><i class="fas fa-trash-alt text-danger"></i></button>
    </div>
</div>

