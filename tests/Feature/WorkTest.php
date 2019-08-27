<?php

namespace Tests\Feature;

use App\Work;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

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
        $this->withoutExceptionHandling();
        $this->createWork()->assertRedirect('/login');
    }
}
