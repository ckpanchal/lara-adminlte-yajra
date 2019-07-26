@extends('adminlte::page')

@section('title', 'Countries | Lara Admin Yajra')

@section('content_header')
    <h1>Countries</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif     
        </div>
        <div class="box-body">
          <table id="laravel_datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Country Name</th>
                <th>Country Code</th>
                <th>Created At</th>
                <th>Updated At</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@stop

@section('js')
<script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('country-list') }}",
      columns: [
        { data: 'id', name: 'id' },
        { data: 'country_name', name: 'country_name' },
        { data: 'country_code', name: 'country_code' },
        { data: 'created_at', name: 'created_at' },
        { data: 'updated_at', name: 'updated_at' }
      ]
    });
  });
</script>
@stop