<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new \App\User([
            'prenom' => 'Thibault',
            'nom' => 'Caci',
            'username' => 'Thibault',
            'email' => 'thibault.caci@viacesi.fr',
            'password' => 'Thibault06000',
            'permissions' => '1',
        ]);
           $users->save();
           
           $users = new \App\User([
            'prenom' => 'Test',
            'nom' => 'Connecté',
            'username' => 'Test_Connecte',
            'email' => 'test_connecte@mail.com',
            'password' => 'Azerty123',
            'permissions' => '3',
        ]);
           $users->save();

           $users = new \App\User([
            'prenom' => 'Test',
            'nom' => 'Abonné',
            'username' => 'Test_Abonne',
            'email' => 'test_abonne@mail.com',
            'password' => 'Azerty123',
            'permissions' => '2',
        ]);
           $users->save();
           
           $users = new \App\User([
            'prenom' => 'Test',
            'nom' => 'Admin',
            'username' => 'Test_Admin',
            'email' => 'test_admin@mail.com',
            'password' => 'Azerty123',
            'permissions' => '1',
        ]);
           $users->save();
    }
}
