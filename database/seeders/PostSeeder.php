<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Illuminate\Support\now;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = new Post();
        $posts->title = 'Post 1';
        $posts->content = 'Content 1';
        $posts->category = 'Category 1';
        $posts->published_at = now();
        $posts->is_active = true;
        $posts->save();
        
        Post::factory(100)->create();
    }
}
