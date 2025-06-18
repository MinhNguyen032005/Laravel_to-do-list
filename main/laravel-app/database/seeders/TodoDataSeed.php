<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TodoDataSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Task 2',
            'description' => 'Description 2',
            'is_completed' => false,
            'due_date' => now()
        ]);
    }
}
