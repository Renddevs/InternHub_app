@extends('shared._layout')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="card-title">Detail Tempat Kerja Praktek</h4>
                    </div>
                    {{-- <div class="col-md-6 col-sm-12 d-flex justify-content-end">
                        <button class="btn btn-sm btn-primary font-weight-bold" style="" onclick="showMdlTambahTempat()"><span style="font-size: 20px;">+</span> Tambah</button>
                    </div> --}}
                </div>
                <p class="card-description">Informasi tempat/perusahaan yang diajukan sebagai tempat kerja praktek.</p>
                {{-- <div class="table-responsive">
                    <table id="" class="display expandable-table" style="width: 100%;" role="grid">
                        <thead>
                            <tr role="row">
                                <th aria-label="#">#</th>
                                <th>Nama Perusahaan</th>
                                <th>Penanggung Jawab</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="7">Data Not Found.</td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control form-control-sm" id="" placeholder="Nama Perusahaan">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Penanggung Jawab</label>
                            <input type="text" class="form-control form-control-sm" id="" placeholder="Penanggung Jawab">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control form-control-sm" id="" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="text" class="form-control form-control-sm" id="" placeholder="No Telp">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" placeholder="Alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" placeholder="Keterangan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button class="btn btn-md btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Upload Surat Balasan Perusahaan</h4>
            <p class="card-description">
              Setelah mendapatkan surat balasan permohonan kerja praktek, upload file surat balasan dari perusahaan yang bersangkutan.
            </p>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Attachment</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 0px!important;">
                <div class="col-md-12 d-flex justify-content-end">
                    <button class="btn btn-md btn-primary d-block">Upload</button>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@include('Mahasiswa.Modal._mdlTambahTempat')

@section('javascript_section')
<script src="{{ asset('page/Mahasiswa/pengajuan_tempat_kp.js') }}"></script>
@endsection


