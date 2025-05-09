@extends('layouts.template')

@section('content')
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">{{ $page->title }}</h3>
      <div class="card-tools">
        <button onclick="modalAction('{{ url('level/import') }}')" class="btn btn-sm btn-info mt-1">Import Level</button>
        <a href="{{ url('/level/export_excel') }}" class="btn btn-sm mt-1 btn-primary"><i class="fa fa-file-excel"></i>Export Excel</a>
        <button onclick="modalAction('{{ url('level/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah
          Ajax</button>
        <a href="{{ url('/level/export_pdf') }}" class="btn btn-sm mt-1 btn-warning"><i class="fa fa-file-pdf"></i> Export PDF</a>
      </div>
    </div>
    <div class="card-body">
      @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif
      <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
        <thead>
          <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Level Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data backdrop="static"
    data-keyboard="false" data-width="75%" aria-hidden="true">
  </div>
@endsection

@push('css')
@endpush

@push('js')
  <script>
    function modalAction(url = '') {
      $('#myModal').load(url, function() {
        $('#myModal').modal('show');
      });
    }

    var dataLevel;
    $(document).ready(function() {
      dataLevel = $('#table_level').DataTable({
        serverSide: true,
        ajax: {
          "url": "{{ url('level/list') }}",
          "dataType": "json",
          "type": "POST"
        },
        columns: [{
          // nomor urut dari laravel datatable addIndexColumn() 
          data: "DT_RowIndex",
          className: "text-center",
          orderable: false,
          searchable: false
        }, {
          data: "level_kode",
          className: "",
          orderable: true,
          searchable: true
        }, {
          // mengambil data level hasil dari ORM berelasi 
          data: "level_nama",
          className: "",
          orderable: false,
          searchable: false
        }, {
          data: "aksi",
          className: "",
          orderable: false,
          searchable: false
        }]
      });

    });
  </script>
@endpush
