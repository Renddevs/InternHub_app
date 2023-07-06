@extends('shared._empty_layout');

@section('custom-style')
<style>
    .img-center{
        margin: auto;display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="card w-50">
                <div class="card-body">
                    <h3 class="text-center mt-4">Bukti Pembayaran</h3>
                    <div class="row mt-4 mb-4">
                        <div class="col-12">
                            <img class="img-center" src="{{ asset('asset/img/bukti_pembayaran/Bukti-Transfer-BCA.jpg') }}">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-12 w-50">
                            <h4>Halo Rendy !</h4>
                            <p>Bukti pembayaran yang kamu kirim sudah kami cek dan approve. Silahkan login kembali atau klik link berikut:</p>
                            <a href="http://127.0.0.1:8000/login_page">http://127.0.0.1:8000/login_page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
