<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(50)->create();
    }
}
