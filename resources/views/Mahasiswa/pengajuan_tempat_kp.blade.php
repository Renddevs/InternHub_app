@extends('shared._layout')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Perusahaan</h4>
                <p class="card-description">Daftar perusahaan yang diajukan sebagai tempat kerja praktek.</p>
                <div class="table-responsive">
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
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Upload Surat Balasan Perusahaan</h4>
            <p class="card-description">
              Setelah mendapatkan surat balasan permohonan kerja praktek, pilih dan upload file surat pada perusahaan yang bersangkutan.
            </p>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Perusahaan</label>
                        <select class="form-control form-control-sm">
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Attachment</label>
                        <input type="file" class="form-control form-control-sm">
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


