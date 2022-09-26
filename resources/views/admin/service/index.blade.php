
@include('admin.header')
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <center>
        <h1 class="page-title">Services</h1>
    </center>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>

    </ol>
</div>

<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Services</div>
        <a href="" class=".btn-fix btn-primary p-2">Add New Services</a>

    </div>
    <div class="ibox-body">

        <table class="table table-striped table-bordered table-hover data_table" id="example-table" cellspacing="0" width="100%">
            <thead>

                <tr>
                    <th>#</th>
                    <th>Services Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>               

                </tr>
            </thead>
            <tbody>
                
            
                <tr>
                    <td></td>

                   
                    <td><img src="" alt="" heigth="50px" width="50px"> </td>

                    <td> <img src="" alt="" heigth="50px" width="50px"></td>
                    

                    <td>
                       
                            <a class=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <!-- <a class="" href=""><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                            


                           
                    </td>


                </tr>
            
                
            </tbody>
        </table>
    </div>
</div>







@include('admin.footer')