<?php

namespace Tests\Feature;

use App\Blog;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A sanity test to make sure test DB is working
     *
     * @return void
     */
    public function testBlogIsInDatabase()
    {
        $post = factory(Blog::class)->create();
        $this->assertDatabaseHas('blogs', [
            'title' => $post->title
        ]);
    }

    public function testOnlyUserCanCreateBlogPost()
    {
        //User log in

        //Test redirected

    }
}
