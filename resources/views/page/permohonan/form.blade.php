@extends('template.template')
@section('title','Home | Form Pengajuan')
@section('content')

<form action="simpan-pengajuan" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pengajuan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Nama Lengkap</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Tempat Tanggal Lahir</label>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir">
                        </div>
                        <div class="col-xs-3">
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Agama</label>
                        </div>
                        <div class="col-xs-9">
                            <select name="agama" id="agama" class="form-control">
                                <option value="">--Pilih Agama--</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Pekerjaan</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">No KTP</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="no_ktp" placeholder="No KTP" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Nama Usaha</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="nama_usaha" placeholder="Nama usaha" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Alamat Lengkap</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="alamat" placeholder="alamat" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Penghasilan</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="penghasilan" placeholder="penghasilan" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Pembiayaan Ke-</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="pembiayaan_ke" placeholder="pembiayaan" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-7">
                            <label for="">Dengan ini saya mengajukan permohonan pembiayaan uang sebesar</label>
                        </div>
                        <div class="col-xs-5">
                            <input type="text" name="jumlah_pembiayaan" placeholder="jumlah" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Dipergunakan untuk keperluan </label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="keperluan" placeholder="keperluan" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Kemampuan Angsuran </label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="angsuran" placeholder="angsuran" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Sistem pengembalian </label>
                        </div>
                        <div class="col-xs-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" required name="sistem_pengembalian" value="Mingguan">
                                    Mingguan &nbsp; &nbsp;
                                </label>
                                <label>
                                    <input type="radio" required name="sistem_pengembalian" value="Dua Mingguan">
                                    Dua Mingguan &nbsp; &nbsp;
                                </label>
                                <label>
                                    <input type="radio" required name="sistem_pengembalian" value="Bulanan">
                                    Bulanan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Sumber pengembalian </label>
                        </div>
                        <div class="col-xs-9">
                            <input type="text" name="sumber_pengembalian" placeholder="sumber" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Bentuk pengembalian </label>
                        </div>
                        <div class="col-xs-9">
                            <div class="radio">
                                <label>
                                    <input type="radio" required name="bentuk_pengembalian" value="Musyarakah">
                                    Musyarakah &nbsp; &nbsp;
                                </label>
                                <label>
                                    <input type="radio" required name="bentuk_pengembalian" value="Mudharabah">
                                    Mudharabah &nbsp; &nbsp;
                                </label>
                                <label>
                                    <input type="radio" required name="bentuk_pengembalian" value="Murabahah">
                                    Murabahah
                                </label>
                                <label>
                                    <input type="radio" required name="bentuk_pengembalian" value="Ijarah">
                                    Ijarah
                                </label>
                                <label>
                                    <input type="radio" required name="bentuk_pengembalian" value="Ar-Rohn">
                                    Ar-Rohn
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Syarat Pengajuan Pembiayaan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">File Jaminan</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="file" name="file_jaminan" class="form-control" required>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">File KTP</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="file" name="file_ktp" class="form-control" required>
                        </div>
                    </div>
                </div> 
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">File KK</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="file" name="file_kk" class="form-control" required>
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="">Photo</label>
                        </div>
                        <div class="col-xs-9">
                            <input type="file" name="photo" class="form-control" required>
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <button type="submit" class="btn btn-info"><i class="fa fa-send"></i> Simpan dan Ajukan </button>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>

</form>



@endsection