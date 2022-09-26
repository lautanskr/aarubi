@include('admin.header')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">About Table</h1>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
         @endif
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
            <button class="btn btn-primary float-right"><a href="{{route('admin_product.create')}}"class="text-white">Add Tables</a></button>

            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Sn</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>1</td>
                            <td>{{$product->product_name}}</td>
                            <td><img src="" alt=""></td>
                            <td>{{$product->description}}</td>
                            <td>
                                <a href="">Delete</a>
                                <a href="">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                       
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
    <!-- END PAGE CONTENT-->
   
</div>
@include('admin.footer')