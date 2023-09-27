<?php
    namespace App\Object\TrsPengajuanTkp;

    class CreateTrsPengajuanTkpRequest
    {
        public string $id_trs_pendaftaran_kp;
        public string $id_mst_mahasiswa;
        public string $nama_perusahaan;
        public string $nama_penanggung_jawab;
        public string $email_perusahaan;
        public string $noHp_penanggung_jawan;
        public string $keterangan;
    }
?>