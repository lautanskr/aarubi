@include('admin.header')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Client Request</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <button class="btn btn-primary float-right"><a href=""class="text-white">Add Tables</a></button>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <tbody>
                        @foreach ($messages as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->client_name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->contact }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->message }}</td>
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
