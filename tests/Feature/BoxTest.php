<?php

namespace Tests\Feature;

use App\Models\Box;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BoxTest extends TestCase
{
    use  RefreshDatabase;

    /**
     * View a single box.
     *
     * @return void
     */
    public function testView()
    {
        $user = factory(User::class)->create();

        $box = factory(Box::class)->make();

        $user->boxes()->save($box);

        $response = $this->json('GET', '/api/boxes/1');

        $response->assertStatus(200);
    }

    /**
     * Create a single box.
     *
     * @return void
     */
    public function testCreate()
    {
        $user = factory(User::class)->create();

        $box = factory(Box::class)->make();

        $response = $this->actingAs($user)
            ->json('POST', '/api/boxes', $box->toArray());

        $response->assertStatus(200)
            ->assertJson([
                'foreign_id' => $box->foreign_id
            ]);
    }
}
