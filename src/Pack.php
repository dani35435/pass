<?php
namespace Pack;

class Pack
{
    public function test_statusCode()
    {
        $response = $this->get('/profile');
        $response->assertStatus(200);
    }
    public function test_status_room()
    {
        $response = $this->get('/room');
        $response->assertStatus(200);
    }

    public function test_status_subdivision()
    {
        $response = $this->get('/subdivision');
        $response->assertStatus(200);
    }

    public function test_status_serch()
    {
        $response = $this->get('/serch');
        $response->assertStatus(200);
    }
}

