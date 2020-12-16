@extends('master');
@section('content');
    
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-sm-6">

            <form action="addproduct" method="POST">
                @csrf
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" required class="form-control" placeholder="Product Name">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="number" name="price" required class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <input type="text" name="category" required class="form-control" placeholder="Category">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" name="description" required class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                  <label>Image(live URL)</label>
                  <input type="url" name="url" class="form-control" required placeholder="Category">
                </div>
                <button type="submit" class="btn btn-primary btn-customized">Add Product</button>
            </form>
        </div>
    </div>
</div>
@endsection