<a href="#" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-outline rounded-pill"> <i
        class="fa fa-list"></i> </a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-home"></i> Home</a>
<a href="{{ route('users.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-user"></i> Users</a>
<a href="{{ route('products.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-box"></i> Products</a>
<a href="{{ route('orders.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-laptop"></i> Cashier</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-file"></i> Reports</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-money-bill"></i> transactions</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-truck"></i> Suppliers</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-users"></i> Customers</a>
<a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-book"></i> Incoming</a>

<style>
.btn-outline {
    border-color: #008b8b;
    color: #008b8b;
}

.btn-outline:hover {
    background: #008b8b;
    color: #fff;
}
</style>