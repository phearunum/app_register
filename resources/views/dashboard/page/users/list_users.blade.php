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
                   <h3 class="app_font_titel">  {{ __('lang.user_management')}}</h3>
                </div>
                <div class="col-sm-5 ">
                <div class="col d-flex justify-content-end  ">
                <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm">{{ __('lang.action') }}</button>
							<button type="button" class="btn btn-primary btn-sm split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end" style="">	<a class="dropdown-item" href="javascript:;">{{ __('lang.addnew') }}</a>
								<a class="dropdown-item" href="javascript:;">{{ __('lang.search') }}</a>

							</div>
						</div>
				</div>
                </div>

            </div>
            <div class="table-responsive">
                <table id="data_user_list" class="table table-striped table-bordered data_user_list" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{ __('lang.id')}}</th>
                            <th>{{ __('lang.first name') }}</th>
                            <th>{{ __('lang.last name') }}</th>
                            <th>{{ __('lang.gender') }}</th>
                            <th>{{ __('lang.username') }}</th>
                            <th>{{ __('lang.email') }}</th>
                            <th>{{ __('lang.phone') }}</th>
                            <th>{{ __('lang.address') }}</th>
                            <th>{{ __('lang.create on') }}</th>
                            <th>{{ __('lang.action') }}</th>
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
        const URL="{{ route('users.lists') }}";
        new App({
          url:URL,
          table:"#data_user_list",
          cols:["id","first_name","last_name","gender","username","email","phone","province","created_at","action"]
        }).loadDataTable();
        /*
      app.loadDataTable(URL,"#data_user_list",
            ["id","first_name","last_name","gender","username","email","phone","province","created_at","action"]
        ,null,null);
      */
      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
         .columns.adjust()
         .responsive.recalc();
   });
    });
</script>
@endauth

@endsection
