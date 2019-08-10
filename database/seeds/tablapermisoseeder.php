<?php

use Illuminate\Database\Seeder;
use App\Models\permiso;

class tablapermisoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(permiso::class, 10)->create();
    }
}
