<?php
    namespace App\Object\TrsPendaftaranKp;

    class CreateTrsPendaftaranKpRequest
    {
        public int $tahun;
        public string $tgl_mulai;
        public string $tgl_akhir;
        public bool $is_susulan;
        public string $keterangan;
    }
?>