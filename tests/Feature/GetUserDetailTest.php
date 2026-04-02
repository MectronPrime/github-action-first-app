<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GetUserDetailTest extends TestCase
{
   public function test_get_all_users_details(){
    $response = $this->getJson('/api/get-all-users');

    $response->assertStatus(200);
    
    dd($response->json());
   }
}
