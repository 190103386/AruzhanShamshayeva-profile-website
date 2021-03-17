<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function test_post_id_get_request(){
        $response = $this->get('/blog/1');

        $response->assertStatus(200);
    }
     public function test_get_unexisted_post(){
        $response = $this->get('/blog/100');

        $response->assertStatus(588);
    }
    public function test_post_response(){
        $response = $this->get('/blog/1');

        $response->assertViewHas('blog');
    }
}
