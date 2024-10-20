<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Client; 
use Illuminate\Http\Request;

class ClientControllerTest extends TestCase
{
    use RefreshDatabase;

    public function it_can_create_a_client()
    {
        $response = $this->postJson('/client', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'cpf' => '12345678901',
            'phone' => '1234567890',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('client', [
            'email' => 'john@example.com',
            'cpf' => '12345678901',
        ]);
    }
}
