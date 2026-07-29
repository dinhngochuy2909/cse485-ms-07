@if(session('success'))
    <div class="flash">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="flash" style="background:#f8d7da;color:#721c24;">
        {{ session('error') }}
    </div>
@endif