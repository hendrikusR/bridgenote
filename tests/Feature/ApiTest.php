<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_data_location()
    {

        $response = $this->getJson('http://localhost:8001/location');
        $response->assertStatus(200);
    }

    public function test_create_data_location() 
    {

        $response = $this->postJson('http://localhost:8001/location/create', [
            'user_id' => 3,
            'status' => 'Active',
            'position' => 'Jakarta'
        ]);

        $response->assertStatus(200);
    }

    public function test_update_data_location() 
    {

        $response = $this->postJson('http://localhost:8001/location/update', [
            'user_id' => 1,
            'status' => 'Not Active',
            'position' => 'Medan'
        ]);

        $response->assertStatus(200);
            

    }

    public function test_delete_data_location() 
    {

        $response = $this->postJson('http://localhost:8001/location/delete', [
            'user_id' => 1
        ]);

        $response->assertStatus(200);
    }
}
