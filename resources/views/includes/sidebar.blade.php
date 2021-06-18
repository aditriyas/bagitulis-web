<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="{{ asset('images/navbar-logo.svg')}}" alt="" class="my-4 w-50" />
    </div>
    @if(true)
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action">Products</a>
            <a href="#" class="list-group-item list-group-item-action">Users</a>
        </div>
    @else
        <div class="list-group list-group-flush">
            <a href="/dashboard-products.html" class="list-group-item list-group-item-action active">My Writings</a>
            <a href="/dashboard-products-update.html" class="list-group-item list-group-item-action">Update Writings</a>
            <a href="/dashboard-products-create.html" class="list-group-item list-group-item-action">Create Writings</a>
        </div>
    @endif

</div>
