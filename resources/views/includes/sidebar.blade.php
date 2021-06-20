<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="{{ asset('images/navbar-logo.svg')}}" alt="" class="my-4 w-50" />
    </div>
    {{-- If admin --}}
    @if(Auth::user()->role == 'admin')
        <div class="list-group list-group-flush">
            <a href="{{ route('home') }}" class="list-group-item list-group-item-action {{ Request::is('home') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.product.index') }}" class="list-group-item list-group-item-action {{ Request::is('admin/product*') ? 'active' : '' }}">Products</a>
            <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action {{ Request::is('admin/users') ? 'active' : '' }}">Users</a>
        </div>
    @else
        <div class="list-group list-group-flush">
            <a href="{{ route('home') }}" class="list-group-item list-group-item-action {{ Request::is('home') ? 'active' : '' }}">My Writings</a>
            <a href="{{ route('member.product.index') }}" class="list-group-item list-group-item-action {{ Request::is('member/product') ? 'active' : '' }}">Collections</a>
            <a href="{{ route('member.product.create') }}" class="list-group-item list-group-item-action {{ Request::is('member/product/create') ? 'active' : '' }}">Create Writings</a>
        </div>
    @endif

</div>
