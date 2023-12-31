@extends('shared._layout')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Pembayaran</h4>
                <p class="card-description">Daftar bukti pembayaran yang diupload calon peserta kerja praktek.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Search</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search by">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row  d-flex justify-content-end">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Total Show Data</label>
                                    <select class="form-control form-control-sm">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>15</option>
                                        <option>20</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="" class="display expandable-table" style="width: 100%;" role="grid">
                        <thead>
                            <tr role="row">
                                <th aria-label="#">#</th>
                                <th>Nama Mahasiswa</th>
                                <th>NPM</th>
                                <th>Prodi</th>
                                <th>Bukti Pembayaran</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status</th>
                                <th class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="">Rendy Praseptya Nugraha</td>
                                <td class=""><strong>19111037</strong></td>
                                <td>Informatika</td>
                                <td><a href="#">scr_transfer.jpg</a></td>
                                <td class="text-center">09-10-2023</td>
                                <td><span class="badge badge-light">Waiting Approve</span></td>
                                <td class="text-center"><div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                      <a class="dropdown-item btn btn-sm" href="#" onclick="showMdlDetailPembayaran()">Detail</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="">Frenty Syari</td>
                                <td class=""><strong>19111038</strong></td>
                                <td>Radiologi</td>
                                <td><a href="#">liv*n_transfer.jpg</a></td>
                                <td class="text-center">12-10-2023</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td class="text-center"><div class="btn-group" role="group">
                                    <button id="" type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="">
                                      <a class="dropdown-item btn btn-sm" href="#">Detail</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="">M Zidane Zovanka</td>
                                <td class=""><strong>19111039</strong></td>
                                <td>Informatika</td>
                                <td><a href="#">b*i_transfer.jpg</a></td>
                                <td class="text-center">15-10-2023</td>
                                <td><span class="badge badge-danger">Reject</span></td>
                                <td class="text-center"><div class="btn-group" role="group">
                                    <button id="" type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="">
                                      <a class="dropdown-item btn btn-sm" href="#">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-5">
                    <div class="col-md-5">
                        <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">
                            Showing 1 to 10 of 10 entries
                        </div>
                    </div>
                    <div class="col-md-7 d-flex justify-content-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item next disabled" id="order-listing_next"><a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
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