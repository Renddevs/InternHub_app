@extends('shared._layout')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="card-title">Bimbingan dengan Dosen Pembimbing</h4>
                    </div>
                    {{-- <div class="col-md-6 col-sm-12 d-flex justify-content-end">
                        <button class="btn btn-sm btn-primary font-weight-bold" style="" onclick="showMdlTambahTempat()"><span style="font-size: 20px;">+</span> Tambah</button>
                    </div> --}}
                </div>
                <p class="card-description">Salah satu syarat kamu mengikuti seminar kerja praktek yaitu mengikuti bimbingan sebanyak minimal 6x. 😉.</p>
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
                                <th>Topik Bimbingan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Bab 1 Pendahuluan & Pengantar</td>
                                <td>20-10-2023</td>
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
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <p>Pada saat masa bimbingan, silahkan upload dokumen laporan yang telah diperbaiki secara berkala !</p>
                <div class="row">
                    <div class="col-md-3">
                        <p><a href="/laporan_m"><u>Upload Dokumen Perbaikan</u></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


