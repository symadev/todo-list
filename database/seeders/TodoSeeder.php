<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo; // Import the Todo model

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create some sample data for the todos table
        Todo::create([
            'task' => 'Learn Laravel',
            'is_done' => false,
        ]);

        Todo::create([
            'task' => 'Complete To-Do App',
            'is_done' => true,
        ]);

        Todo::create([
            'task' => 'Write blog post about Laravel seeding',
            'is_done' => false,
        ]);

        Todo::create([
            'task' => 'Attend Laravel Meetup',
            'is_done' => false,
        ]);

        
    }
}
