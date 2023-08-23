<?php

namespace Tests\Feature;

use Tests\TestCase;

class FlowPendaftaranTest extends TestCase
{
    public function test_verifikasi_pendaftaran(): void
    {
        $response = $this->getJson('/api/trsPendaftaranKp/verifikasi/123890');
        $response->assertStatus(406);
    }
    
}
