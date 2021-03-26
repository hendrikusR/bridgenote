<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserLoginTest extends TestCase
{
    
    // use RefreshDatabase;
    /**
     * A basic feature test dawd.
     *
     * @return void
     */
    public function test_user_can_see_login_page()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_registered_user_can_login()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
    }
}
