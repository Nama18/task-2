@extends('template.template')
@section('title','Home | Syarat')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Syarat dan ketentuan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @php
                  echo $syarat
              @endphp
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection