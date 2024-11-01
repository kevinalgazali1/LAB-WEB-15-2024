<!-- resources/views/components/notification.blade.php -->
@if(session('success'))
    <div class="notification-wrapper">
        <div class="notification success">
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="notification-wrapper">
        <div class="notification error">
            {{ session('error') }}
        </div>
    </div>
@endif