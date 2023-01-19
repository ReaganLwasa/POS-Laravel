@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float: left;">Order Products</h4> <a href="#" style="float: right;"
                            class="btn btn-dark" data-toggle="modal" data-target="#addproduct">
                            <i class="fa fa-plus"></i> Add New Products
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-left">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Discount (%)</th>
                                    <th>Total</th>
                                    <th><a href="" class="btn btn-sm btn-success"><i
                                                class="fa fa-plus-circle add_more"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="addMoreProduct">
                                <tr>
                                    <td>
                                        <select name="product_id" id="product_id" class="from-control product_id">
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number" name="quantity[]" id="quantity" class="from-control">
                                    </td>
                                    <td>
                                        <input type="number" name="price[]" id="price" class="from-control">
                                    </td>
                                    <td>
                                        <input type="number" name="discount[]" id="discount" class="from-control">
                                    </td>
                                    <td>
                                        <input type="number" name="total_amount[]" id="total" class="from-control">
                                    </td>
                                    <td><a href="" class="btn btn-sm btn-danger delete"><i
                                                class="fa fa-times-circle"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Total 0.00</h4>
                    </div>
                    <div class="card-body">
                        .............
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal of adding new product --}}

<!-- Modal -->
<div class="modal right fade" id="addproduct" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="product_name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Brand</label>
                        <input type="text" name="brand" id="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alert Stock</label>
                        <input type="text" name="alert stock" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="2" class="form-control"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary btn-block">Save product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<style>
.modal.right .modal-dialog {
    /* position: absolute; */
    top: 0;
    right: 0;
    margin-right: 1vh;
}

.modal.fate:not(.in).right .modal-dialog {
    -webkit-transform: translate3d(25%, 0, 0);
    transform: translate3d(25%, 0, 0);
}
</style>
@endsection

@section('script')
<script>
// $(document).ready(function() {

// })

$('.add_more').on('click', function() {
    var product = $('.product_id').html();
    var numberofroe = ($('.addMoreProduct tr').length - 0) + 1;
    var tr = '<tr><td> class"no">' + numberofrow + '</td>' +
        '<td><select class="from-control product_id" name="product_id[]">' + product +
        '</select></td>' +
        '<td> <input type="number" name="quantity[]" class="form-control"</td>' +
        '<td> <input type="number" name="price[]" class="form-control"</td>' +
        '<td> <input type="number" name="discount[]" class="form-control"</td>' +
        '<td> <input type="number" name="total_amount[]" class="form-control"</td>' +
})
</script>
@endsection