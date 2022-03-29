<div>
    @auth
    <a href="" >
        <span class="icon icon-sm icon-success"><i class="fas fa-user"></i></span>
        <div class="ml-4">
            <span class="text-dark d-block">
                {{ Auth::user()->name }}
            </span>
            <span class="small">View profile details!</span>
        </div>
    </a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('account-logout-form').submit();">
        <span class="icon icon-sm icon-secondary">
            <i class="fas fa-sign-out-alt"></i>
        </span>
        <div class="ml-4">
            <span class="text-dark d-block">
                Logout
            </span>
            <span class="small">Logout from your account!</span>
        </div>
    </a>
    <form id="account-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
    <a href="{{ route('login') }}">
        <span class="icon icon-sm icon-secondary"><i class="fas fa-key"></i></span>
        <div class="ml-4">
            <span class="text-dark d-block">
                Login
            </span>
            <span class="small">Login to the application</span>
        </div>
    </a>
    @if(user_registration())
    <a href="{{ route('register') }}"
        class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
        <span class="icon icon-sm icon-primary">
            <i class="fas fa-address-card"></i>
        </span>
        <div class="ml-4">
            <span class="text-dark d-block">Register</span>
            <span class="small">Join with us!</span>
        </div>
    </a>
    @endif
    @endauth
</div>
<div class="d-none d-lg-block">
@can('view_backend')
<a href="{{ route('backend.dashboard') }}" class="btn btn-white animate-up-2 mr-3"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
@endcan