<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FlowPelaksanaanTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_bimbingan_kp() : void 
    {
        $response = $this->post('/api/trsBimbinganKp/create', [
            'id_trs_pendaftaran_kp' => "99DB0162-1F51-4767-B552-D21D78D05EBD",
            'id_mst_mahasiswa' => "99DAD247-FF16-41A0-99EB-829293F473F1",
            'id_mst_dosen' => "99DAB5D5-00F5-4BF6-A647-8D9D509A251E",
            'topik_bimbingan' => "Perbaikan judul dan penyusunan bab 1"
        ]);
        $response->assertStatus(200);
    }

    public function test_approve_bimbingan_kp(): void
    {
        $response = $this->post('/api/trsBimbinganKp/approve', [
            'id_trs_bimbingan_kp' => "9A20F28A-102A-4973-933B-91937451B7EC",
        ]);
        $response->assertStatus(200);
    }
}
