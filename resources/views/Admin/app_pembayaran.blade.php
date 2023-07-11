@extends('shared._layout')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Pembayaran</h4>
                <p class="card-description">Daftar bukti pembayaran yang diupload calon peserta kerja praktek.</p>
                <div class="table-responsive">
                    <table id="" class="display expandable-table" style="width: 100%;" role="grid">
                        <thead>
                            <tr role="row">
                                <th aria-label="#">#</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
                                <th>Bukti Pembayaran</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" colspan="6">Data Not Found.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('Admin.Modal._mdl_detail_pembayaran')

@section('javascript_section')
<script src="{{ asset('page/Admin/app_pembayaran.js') }}"></script>
@endsection