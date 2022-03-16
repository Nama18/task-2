@extends('template.template')
@section('title','Data Anggota')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
                @include('template.notifikasi')

                <table class="table table-bordered" id="example2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Admin/Anggota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($list_data as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <a href="edit-anggota/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>

                                    <a href="hapus-anggota/{{$item->id}}" class="btn btn-danger btn-xs" onclick="javasciprt: return confirm('Are You Sure ?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @php
                            $no++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection