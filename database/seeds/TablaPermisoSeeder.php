<?php

use App\Models\Admin\Permiso as AdminPermiso;

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
        factory(AdminPermiso::class, 50)->create();
    }
}
