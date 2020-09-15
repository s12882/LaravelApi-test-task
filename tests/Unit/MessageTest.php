<?php

namespace Tests\Unit;

use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    /**
     * Send message unit test.
     *
     * @return void
     */
    public function testSendFirstMessage()
    {
        $data = [
            'message' => Str::random('50'),
        ];

        $this->post(route('api.send.message'), $data)
            ->assertStatus(201)
            ->assertJson(['success' => true, 'text' => $data['text']]);
    }
}
