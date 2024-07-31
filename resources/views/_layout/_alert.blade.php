@if (session('success'))
<div class="alert alert-success mb-3">
    {{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger mb-3">
    {{ session('error') }}
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger mb-3">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif