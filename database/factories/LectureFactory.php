<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lectureName' => 'Introduction of HTML',
            'tags' => 'html','backend','css',
            'image' => 'assets/images/tech-stack/html.png',
            'github' => 'https://github.com/tropangpotchiph86/KodeJobsLaravel',
            'description' => 'Introduction of HTML',
            'video' => 'https://www.youtube-nocookie.com/embed/zx7odiPUs6M?si=EY4gQ5hMUSupwsnA&amp;start=1445',
        ];
    }
}
