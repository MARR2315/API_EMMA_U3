<?php

use Illuminate\Database\Seeder;
use App\Tiburones;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(tiburones_seed::class);
    }
}
