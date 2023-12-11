@extends('shared._layout')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Upload laporan yang telah kamu susun.</h4>
            <p class="card-description">
                Upload dokumen laporan mu disini dan tunggu <strong>Feed Back</strong> dari dosen pembimbing yang bersangkutan.
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
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="card-title">List dokumen laporan yang selama ini kamu upload !</h4>
                    </div>
                </div>
                <p class="card-description">Salah satu syarat kamu mengikuti seminar kerja praktek yaitu dokumen laporan yang sudah di approve oleh dosen pembimbing.</p>
                <div class="table-responsive">
                    <table id="" class="display expandable-table" style="width: 100%;" role="grid">
                        <thead>
                            <tr role="row">
                                <th aria-label="#">#</th>
                                <th>Dokumen</th>
                                <th>Keterangan</th>
                                <th>Tanggal Upload</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td><a href="#">dokumen_laporan-final.pdf</a></td>
                                <td>Laporan sudah saya cek</td>
                                <td>20-12-2023</td>
                                <td><span class="badge badge-success">Approve</span></td>
                                <td><button class="btn btn-sm btn-info"><i class="icon-download menu-icon"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
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


