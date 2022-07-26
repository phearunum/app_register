@extends('dashboard.widget.master')
@section('content')
@auth
<div class="page-content">
    <!--breadcrumb-->
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-7">
                   <h3>  User Management  </h3>
                </div>
                <div class="col-sm-5 ">
                <div class="col d-flex justify-content-end  ">
										<button type="button" class="btn btn-sm btn-primary "><i class="bx bx-plus mr-1"></i>AddNew</button>
				</div>
                </div>

            </div>
            <div class="table-responsive">
                <table id="data_user_list" class="table table-striped table-bordered data_user_list" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Create</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<script>
    $(function() {
        jQuery('#data_user_list').DataTable({
            processing: true,
            serverSide: true,
            dom: 'Blfrtip',
            order: [
                [1, "asc"]
            ],

            ajax: "{{ route('users.lists') }}",
            columns: [
                //  {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'first_name',
                    name: 'first_name'
                },
                {
                    data: 'last_name',
                    name: 'last_name'
                },
                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'province',
                    name: 'province'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },

            ]
        });

    });

    function Datas(table, cols = [], title, childs = []) {
        var default_name = table;
        var oDT = $("#" + table).DataTable({
            "bDestroy": true,
            "processing": true,
            "jQueryUI": true,
            "aoColumns": cols,
            "lengthChange": true,
            "lengthMenu": [
                [25, 50, 100, 500, 1000],
                [25, 50, 100, 500, "Max"]
            ],
            "pageLength": 10,
            "bSort": true,
            "columnDefs": [{
                "targets": [0], //first column / numbering column
                "orderable": false //set not orderable
            }],
            dom: 'Blfrtip',
            order: [
                [1, "asc"]
            ],
            buttons: [

                {

                    extend: 'print',
                    text: '<i class="fa fa-print"></i> ' + prints_,
                    "className": 'btn x-window-default  btn-sm',
                    messageTop: function() {
                        return title == null ? '' : title;
                    },
                    customize: function(win) {
                        $(win.document.body).children("h1:first").remove();
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf-o"></i> PDF',
                    "className": 'btn btn-default btn-sm x-window-default '
                },
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i> Excel',
                    filename: "_excel",
                    "className": 'btn btn-default btn-sm x-window-default'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fa fa-file-code-o"></i> CSV',
                    filename: +"_excel",
                    "className": 'btn btn-default btn-sm x-window-default'
                },
                /*{
                    extend: 'colvis',
                    text: '<i class="fa fa-sliders"></i> Custome',
                    "className": 'btn btn-default btn-sm'
                },*/
                {
                    extend: 'copy',
                    text: '<i class="fa fa-clone"></i> Copy',
                    "className": 'btn-sm btn btn-default x-window-default'
                },
                /*
                                {
                                    extend: 'pageLength',
                                    text: '<i class="fa fa-sort-amount-desc"></i> Show',
                                    "className": 'btn btn-default btn-sm'
                                },
                */

            ]
        });


    };
</script>
@endauth

@endsection
