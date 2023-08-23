<?php

namespace Tests\Feature;

use Tests\TestCase;

class FlowPendaftaranTest extends TestCase
{
    public function test_verifikasi_pendaftaran(): void
    {
        $ser = $this->app->make('App\Services\TrsPendaftaranKp\TrsPendaftaranKpService');  
        $test = $ser->VPendaftaran("8091239");
        $this->assertTrue($test->code == 200);
    }
    
}
