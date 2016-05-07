<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('tasks')->truncate();

        factory(App\Task::class,20)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
