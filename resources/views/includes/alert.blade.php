@if ($alert = session()->pull('alert'))
    <div class="alert {{ session()->pull('alert_type') === 'success' ? 'alert-success' : 'alert-danger' }} mb-0 rounded-0 text-center small py-2">
        {{ $alert }}
    </div>
@endif
