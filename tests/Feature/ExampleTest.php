<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->post('api/v1/pinterest', [
            'name' => "Restaurante",
            'x' => 10,
            'y' => 20,
            'opened' => "21:00",
            'closed' => "23:00",
        ]);

        $response->assertStatus(200);
    }
}
