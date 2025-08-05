<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'content' => 'Sangat Skibidi',
            'profile_id' => 1
        ]);
        Comment::create([
            'content' => 'Toilet Skibidi',
            'profile_id' => 2
        ]);
        Comment::create([
            'content' => 'Sigma Skibidi',
            'profile_id' => 3
        ]);
        Comment::create([
            'content' => 'Sigma Toilet',
            'profile_id' => 1
        ]);

        Comment::create([
            'content' => 'Rizz God Toilet', 
            'profile_id' => 2
        ]);
        Comment::create([
            'content' => 'Skibidi Dop Dop Yes Yes', 
            'profile_id' => 3
        ]);
        Comment::create([
            'content' => 'Camera Men W', 
            'profile_id' => 1
        ]);

        Comment::create([
            'content' => 'Toilet Resistance Strong', 
            'profile_id' => 4
        ]);
        Comment::create([
            'content' => 'G-Man is underrated', 
            'profile_id' => 5
        ]);
        Comment::create([
            'content' => 'Speaker Man comeback when?', 
            'profile_id' => 6
        ]);
        Comment::create([
            'content' => 'TV Woman supremacy', 
            'profile_id' => 7
        ]);
        Comment::create([
            'content' => 'Alief is the true Sigma', 
            'profile_id' => 1
        ]);
        Comment::create([
            'content' => 'Camera Men carried the war', 
            'profile_id' => 5
        ]);
        Comment::create([
            'content' => 'G-Man too mysterious', 
            'profile_id' => 4
        ]);
        Comment::create([
            'content' => 'Day 1 of resisting Skibidi', 
            'profile_id' => 6]);
        Comment::create([
            'content' => 'Day 1000: Still no toilet peace', 
            'profile_id' => 7
        ]);
        
    }
}
