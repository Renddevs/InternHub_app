<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FlowPendaftaranTest extends TestCase
{
    public function test_verifikasi_pendaftaran(): void
    {
        $response = $this->getJson('/api/trsPembayaranKp/verifikasi/123890');
        $response->assertStatus(406);
    }

    public function test_upload_pembayaran_kp(): void
    {
        $file = UploadedFile::fake()->image('bukti.jpg');
        $response = $this->post('/api/trsPembayaranKp/uploadBPembayaran', [
            'bukti_pembayaran' => $file,
            'id_trs_pendaftaran_kp' => "99DB0162-1F51-4767-B552-D21D78D05EBD",
            'id_mst_mahasiswa' => "99DAD247-FF16-41A0-99EB-829293F473F1"
        ]);
        $response->assertStatus(200);
    }

    public function test_approve_pembayaran_kp(): void
    {
        $response = $this->post('/api/trsPembayaranKp/approve', [
            'id' => "9BC9FE73-D533-44DA-97A3-00953281ED6F",
            'is_approve' => 1,
        ]);
        $response->assertStatus(200);
    }
    
}
