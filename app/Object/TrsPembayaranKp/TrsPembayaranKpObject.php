<?php
    namespace App\Object\TrsPendaftaranKp;

    class TrsPendaftaranKpObject
    {
        public string $id;
        public string $id_trs_pendaftaran_kp;
        public string $id_mst_mahasiswa;
        public string $id_mst_media;
        public date $tgl_pengajuan;
        public bool $is_approve;
        public date $tgl_approve;
    }
?>