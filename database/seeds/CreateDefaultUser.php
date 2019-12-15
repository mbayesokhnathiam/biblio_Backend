<?php

use App\Models\Abonne;
use Illuminate\Database\Seeder;

class CreateDefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Abonne::create([
            'numAbonne' => 'A2019-001',
            'cin' => '1314199308765',
            'nom' => 'LARSON',
            'prenom' => 'Thonny',
            'adresse' => 'Sacree coeur',
            'email' => 'thonny@gmail.com',
            'tel' => '770000000',
            'login' => 'thonny',
            'mdp' => bcrypt('passer'),
            'remember_me' => false,
        ]);
    }
}
