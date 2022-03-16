@extends('template.template')
@section('title','Profil')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Profil</h3>
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
                
                <form action="ubah-profil" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">Email</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="text" name="email" placeholder="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">Password Baru</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="password" name="password" placeholder="Password Baru" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">Konfirmasi Password</label>
                            </div>
                            <div class="col-xs-9">
                                <input type="password" name="password_konfirmasi" placeholder="Konfirmasi Password" class="form-control">
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