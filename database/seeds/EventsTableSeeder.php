<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = new \App\Events([
            'image' => '',
            'nom' => 'Evenement_1',
            'lieu' => 'ici',
            'desc' => 'blabla',
            'date_debut' => '01/01/2000',
            'date_fin' => '31/12/2999'
        ]);
        $events->save();
    }
}
