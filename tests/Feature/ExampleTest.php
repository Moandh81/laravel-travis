<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;



class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // // {
    // //     $response = $this->get('/');
    // //
    // //     $response->assertStatus(200);
    // // }

public funtion testBasicExample() {
  $data = [10,20, 30];
  $result = array_sum($data) ;
  $this->assertEquals(60, $result); 
}




}
