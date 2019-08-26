<?php

namespace Tests\Feature;

use App\Blog;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

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

    public function createPost()
    {
        $attributes = [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->text(),
            'featured_image' => $this->faker->imageUrl()
        ];

        return $this->post('/blog', $attributes);
    }

    public function testOnlyUserCanCreateBlogPost()
    {
        $this->createPost()->assertRedirect('/login');
    }

    public function testGuestCannotCreatePost()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $this->createPost()->assertRedirect('/login');
    }

    public function testAdminCanCreatePost()
    {
        $user = factory(User::class)->create();

        $user->roles = 'admin';
        $user->save();

        $this->actingAs($user);
        $this->createPost()->assertRedirect('/blog/1');
    }

    public function testBlogPageDisplaysPosts()
    {
        $response = $this->get('blog');
        $response->assertStatus(200);
    }

    public function testGuestCanReadPost()
    {
        $post = factory(Blog::class)->create();
        $response = $this->get(route('blog.show', $post->id));
        $response->assertStatus(200);
        $response->assertSee($post->title);

    }
}
