<?php

/**
 * @author Jessuir Cleydson
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tickets::factory(10)->create();
    }
}
