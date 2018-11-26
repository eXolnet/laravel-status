<?php namespace Exolnet\Status\Tests\Feature;

use Illuminate\Support\Facades\File;

class StatusTest extends TestCase
{
    /**
     * Test that /health page should exists.
     */
    public function testHealthRoute()
    {
        $response = $this->get('/health');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $response->assertSeeText('OK');
    }

    /**
     * Test that /sha page should exists when a REVISION file exists.
     */
    public function testShaRoute()
    {
        File::put('REVISION', '2b21eb3');

        $response = $this->get('/sha');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
        $response->assertSeeText('2b21eb3');

        File::delete('REVISION');
    }

    /**
     * Test that /sha page should return 404 when a REVISION file exists.
     */
    public function testShaRouteWithoutREVISIONFile()
    {
        $response = $this->get('/sha');

        $response->assertStatus(404);
    }
}
