<?php

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //este seeder activa el factory "Permiso y crea 50 registros"
        factory(Permiso::class, 50)->create();
    }
}
