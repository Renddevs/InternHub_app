<div class="modal fade" id="mdl_detail_pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="modal-title" id="exampleModalLabel">Detail Pembayaran</h4>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 col-sm-12">
                      <address>
                        <p>Nama</p>
                        <p class="font-weight-bold mb-2">Rendy Praseptya Nugraha</p>
                        <p class="">Prodi</p>
                        <p class="font-weight-bold">Informatika(2019)</p>
                      </address>
                    </div>
                    <div class="col-md-6 col-sm-12">
                      <address>
                        <p>Tanggal Pembayaran</p>
                        <p class="font-weight-bold mb-2">10-10-2020</p>
                        <p class="">Status</p>
                        <p class="font-weight-bold text-warning">Belum Di Approve</p>
                      </address>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Bukti Pembayaran</p>
                        <img src="{{ asset('asset/img/bukti_pembayaran/Bukti-Transfer-BCA.jpg') }}" style="height: 350px; width: 100%;">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p>Keterangan</p>
                        <textarea class="form-control form-control-md" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="row d-flex justify-content-end mt-5">
                    <div class="col-md-3 col-sm-12">
                        <button class="btn btn-sm btn-success w-100">Approve</button>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <button class="btn btn-sm btn-danger w-100">Tolak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>