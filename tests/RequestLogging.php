<?php

namespace Sdkcodes\Logpress\Tests;

use Illuminate\Support\Facades\Log;
use Sdkcodes\Logpress\Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequestLoggingTest extends TestCase
{
    /**
     * @test
     * A basic feature test example.
     *
     * @return void
     */
    public function testRequestWrittenToLog()
    {
        $response = $this->get('/')->dump();

        Log::shouldReceive('info')
            ->with('Body: {"q" : "body"}');

        $response->assertStatus(200);
    }
}
