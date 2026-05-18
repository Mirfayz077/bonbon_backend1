<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomePageOpens()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testMenuPageOpens()
    {
        $response = $this->get('/menu');

        $response->assertStatus(200);
    }

    public function testQrPageOpens()
    {
        $response = $this->get('/qr/12');

        $response->assertStatus(200);
    }
}
