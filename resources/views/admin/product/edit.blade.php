@include('admin.header');
<div class="content-wrapper">
    <div class="page-heading">
        <h1 class="page-title">Products</h1>
        <ol class="breadcrumb">


        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Product</div>
                    </div>
                    <div class="col-sm-12 form-group">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="ibox-body">
                        <form action="{{ route('admin.product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Product Photo</label>
                                    <input class="form-control" type="file" name="product_image" >
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Product Name</label>
                                    <input class="form-control" type="text" name="product_name" value="{{$product->product_name}}"
                                        placeholder="Product Name">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Discription</label>
                                    <textarea class="form-control" rows="3" name="product_description" placeholder="Product Details">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer');
