<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *<
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // 数値関連
        $answer = 1 + 1;
        $this->assertIsInt($answer);
        $this->assertIsNotFloat($answer);
        $this->assertIsNumeric($answer);
        $this->assertEquals($answer,2);
        $this->assertNotEquals($answer, 100);
        $this->assertGreaterThan($answer, 5);
        $this->assertGreaterThanOrEqual($answer, 2);
        $this->assertLessThan($answer, 1);
        $this->assertLessThanOrEqual($answer, 2);

        // boolean関連
        $this->assertIsBool(true);
        $this->assertIsBool(false);
        $this->assertTrue(true);
        $this->assertFalse(false);

        // NUll関連
        $this->assertNull(null);
        $this->assertNotNull(!null);

        // 配列関連
        $users = ['konan', 'sherry', 'ran', 'jin'];
        $this->assertIsArray($users);
        $this->assertCount(4, $users);
        $this->assertNotCount(0, $users);
        $this->assertContains('konan', $users);
        $this->assertNotContains('kogoro', $users);
        $this->assertNotEmpty($users);

        $user = ['name' => 'konan', 'age' => 6];
        $this->assertArrayHasKey('name', $user);

    }

}
