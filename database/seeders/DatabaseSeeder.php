<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Lecture;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Lecture::factory(10)->create();

        // Lecture::create([
            
        //     'lectureName' => 'Introduction of HTML',
        //     'tags' => 'discussion','CSS',
        //     'image' => 'assets/images/tech-stack/html.png',
        //     'github' => 'https://github.com/tropangpotchiph86/KodeJobsLaravel',
        //     'description' => 'Introduction of HTML',
        //     'video' => 'https://www.youtube-nocookie.com/embed/zx7odiPUs6M?si=EY4gQ5hMUSupwsnA&amp;start=1445',
        // ]);

        // Lecture::create([
            
        //     'lectureName' => 'forms',
        //     'tags' => 'html',
        //     'image' => 'assets/images/tech-stack/html.png',
        //     'github' => 'https://github.com/tropangpotchiph86/KodeJobsLaravel',
        //     'description' => 'Forms HTML',
        //     'video' => 'https://www.youtube.com/embed/K0A4Ok8kaSw?si=H6sV3V7mBlhMXH2q&amp;start=138',
        // ]);

        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
