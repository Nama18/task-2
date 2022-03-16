@extends('template.template')
@section('title','Edit Anggota')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Anggota</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                {{-- menampilkan error validasi --}}
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @include('template.notifikasi')
                
                <form action="ubah-anggota" method="POST">
                    @csrf

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">Nama Lengkap</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" value="{{ $anggota->name }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">Email</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="email" name="email" placeholder="email" class="form-control" value="{{ $anggota->email }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">Level</label>
                            </div>
                            <div class="col-xs-9">
                                <select name="role" id="role" class="form-control">
                                    <option value="{{ $anggota->role }}">{{ $anggota->role }}</option>
                                    <option value="admin">Admin</option>
                                    <option value="anggota">Anggota</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                
                            </div>
                            <div class="col-xs-9">
                                <button style="submit" class="btn btn-primary"> Update</button>
                            </div>
                        </div>
                        
                    </div>
                    

                </form>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

@endsection