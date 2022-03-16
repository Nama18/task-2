@extends('template.template')
@section('title','Home | Form Pengajuan')
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
                
                <table class="table table-bordered" id="example2">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Pengembalian</th>
                            <th>Jumlah Pembiayaan</th>
                            <th>Tanggal</th>
                            <th>Status Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($list_data as $item)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis_pengambilan }}</td>
                                <td>{{ $item->jumlah_pembiayaan }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    @if ($item->status != '')
                                        @if ($item->status == 'terima')
                                            <span class="label label-success">DITERIMA</span>
                                        @else
                                            <span span class="label label-danger">DITOLAK</span>
                                        @endif
                                    @endif
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