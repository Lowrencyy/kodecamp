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
            'lectureName' => 'blocked and inline',
            'tags' => 'html',
            'image' => 'assets/images/tech-stack/html.png',
            'github' => 'https://github.com/tropangpotchiph86/KodeJobsLaravel',
            'description' => 'HTML blocked and inline',
            'video' => 'https://www.youtube-nocookie.com/embed/K0A4Ok8kaSw?si=8KUPmlVoHFiT_V80&amp;start=4841',
        ];
    }
}
