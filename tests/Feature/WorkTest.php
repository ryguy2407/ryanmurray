<?php

namespace Tests\Feature;

use App\User;
use App\Work;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Utilities\UserActionsTrait;

class WorkTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    use UserActionsTrait;

    public function createWork()
    {
        $attributes = [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->text(),
            'featured_image' => $this->faker->imageUrl()
        ];

        return $this->post('/work', $attributes);
    }

    /**
     * A sanity test to make sure test DB is working
     *
     * @return void
     */
    public function testWorkIsInDatabase()
    {
        $work = factory(Work::class)->create();
        $this->assertDatabaseHas('works', [
            'title' => $work->title
        ]);
    }

    public function testNotLoggedInCannotCreatePost()
    {
        $this->createWork()->assertRedirect('/login');
    }

    public function testGuestCannotCreateWork()
    {
        //Create user
        $user = factory(User::class)->create();

        //Login as that guest user
        $this->actingAs($user);

        //It should redirect
        $this->createWork()->assertRedirect('/login');
    }

    public function testAdminCanCreatePost()
    {
        $this->withoutExceptionHandling();
        $this->loginAsAdmin();
        $this->createWork()->assertRedirect('/work/1');
    }

    public function testWorkPageDisplaysWorks()
    {
        $response = $this->get('work');
        $response->assertStatus(200);
    }

    public function testGuestCanReadPost()
    {
        $work = factory(Work::class)->create();
        $response = $this->get(route('work.show', $work->id));
        $response->assertStatus(200);
        $response->assertSee($work->title);
    }

    public function testGuestCannotEditPost()
    {
        $work = factory(Work::class)->create();
        $this->loginAsGuest();

        $response = $this->get(route('work.edit', $work->id));

        $response->assertRedirect('/login');
    }

    public function testAdminCanEditPost()
    {
        $work = factory(Work::class)->create();
        $this->loginAsAdmin();

        $response = $this->get(route('work.edit', $work->id));

        $response->assertStatus(200);
        $response->assertSee($work->title);
    }
}

