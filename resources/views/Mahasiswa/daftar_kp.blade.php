@extends('shared._empty_layout')

@section('content')
    <div class="content-wrapper">
        <div class="row mt-5 ">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card" style="width: 80%;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-xl-6 d-flex flex-column justify-content-start border-right">
                                <div class="ml-xl-4 mt-3">
                                    <p class="card-title">Persyaratan Kerja Praktek</p>
                                    <p class="card-description">Syarat-syarat untuk menempuh mata kuliah kerja praktek.</p>
                                    <ul class="list-ticked">
                                        <li>Matakuliah Kerja Praktek minimal diambil pada semester 6.</li>
                                        <li>Telah menempuh mata kuliah Metodologi Penelitian.</li>
                                        <li>Telah mencantumkan mata kuliah Kerja Praktek pada KRS.</li>
                                    </ul>
                                    <p class="mb-2 mb-xl-0">Jika seluruh persyaratan tidak terpenuhi, anda tidak akan bisa upload bukti pembayaran kerja praktek !</p>
                              </div>  
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="row">
                                    <div class="col-12 d-flex flex-column justify-content-start">
                                        <div class="ml-xl-4 mt-3">
                                            <p class="card-title">Upload Bukti Pembayaran</p>
                                            <div class="form-group">
                                                <label>File upload</label>
                                                <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                            </div>
                                            <button type="button" class="btn btn-sm btn-danger btn-icon-text float-right">
                                                <i class="ti-upload btn-icon-prepend"></i> Upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-12 d-flex flex-column justify-content-start">
                                        <div class="ml-xl-4 mt-3">
                                            <p class="card-title">Upload Bukti Pembayaran</p>
                                            <h4 class=""><i class="mdi mdi mdi-check-circle text-success"></i> Bukti pembayaran sudah di upload.</h4>
                                            <hr>
                                            <h6>Keterangan : </h6>
                                            <p class="card-description"><i class="mdi mdi-information text-info"></i> Approve bukti pembayaran akan dilakukan oleh admin selambat-lambatnya 1x24 jam.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="row">
                                    <div class="col-12 d-flex flex-column justify-content-start">
                                        <div class="ml-xl-4 mt-3">
                                            <p class="card-title">Upload Bukti Pembayaran</p>
                                            <h4 class=""><i class="mdi mdi-close-circle text-danger"></i> Bukti pembayaran di tolak !</h4>
                                            <hr>
                                            <h6>Keterangan : </h6>
                                            <p class="card-description"><i class="mdi mdi-message-alert text-warning"></i> Gambar kwitansi tidak jelas, harap upload ulang kembali dengan gambar yang jelas !</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection