<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\Post;
class CreatePostTest extends TestCase
{
    /** @test
     * Smoke test to check if the component renders successfully
     */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    /** @test
     * Happy path test to check if the post can be created
    */
    public function can_create_post()
    {
       $post = Post::whereTitle('Test Post')->first();
       $this->assertNull($post);

       Livewire::test(CreatePost::class)
            ->set('title', 'Test Post')
            ->set('content', 'Test Content')
            ->call('createPost');

        $post = Post::whereTitle('Test Post')->first();
        $this->assertNotNull($post);
        $this->assertEquals('Test Post', $post->title);
        $this->assertEquals('Test Content', $post->content);
    }

    /** @test
     * Test to check if the title is required (Specific Tests for edge cases)
    */
    public function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('createPost')
            ->assertHasErrors(['title' => 'required']);
    }
}
