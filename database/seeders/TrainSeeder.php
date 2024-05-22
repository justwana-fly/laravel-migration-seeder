<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trains')->insert([
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Milano Centrale',
                'stazione_di_arrivo' => 'Roma Termini',
                'orario_di_partenza' => '08:00:00',
                'orario_di_arrivo' => '12:00:00',
                'codice_treno' => '12345',
                'numero_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Venezia Mestre',
                'stazione_di_arrivo' => 'Firenze SMN',
                'orario_di_partenza' => '09:00:00',
                'orario_di_arrivo' => '11:30:00',
                'codice_treno' => '54321',
                'numero_carrozze' => 8,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Frecciarossa',
                'stazione_di_partenza' => 'Torino Porta Nuova',
                'stazione_di_arrivo' => 'Napoli Centrale',
                'orario_di_partenza' => '06:00:00',
                'orario_di_arrivo' => '11:00:00',
                'codice_treno' => '67890',
                'numero_carrozze' => 12,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Intercity',
                'stazione_di_partenza' => 'Bologna Centrale',
                'stazione_di_arrivo' => 'Bari Centrale',
                'orario_di_partenza' => '07:00:00',
                'orario_di_arrivo' => '13:00:00',
                'codice_treno' => '24680',
                'numero_carrozze' => 15,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Regionale',
                'stazione_di_partenza' => 'Genova Piazza Principe',
                'stazione_di_arrivo' => 'La Spezia Centrale',
                'orario_di_partenza' => '05:30:00',
                'orario_di_arrivo' => '07:30:00',
                'codice_treno' => '13579',
                'numero_carrozze' => 6,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Trenord',
                'stazione_di_partenza' => 'Milano Centrale',
                'stazione_di_arrivo' => 'Bergamo',
                'orario_di_partenza' => '10:00:00',
                'orario_di_arrivo' => '11:30:00',
                'codice_treno' => '98765',
                'numero_carrozze' => 5,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Thello',
                'stazione_di_partenza' => 'Venezia Santa Lucia',
                'stazione_di_arrivo' => 'Parigi Gare de Lyon',
                'orario_di_partenza' => '17:00:00',
                'orario_di_arrivo' => '08:00:00',
                'codice_treno' => '11223',
                'numero_carrozze' => 20,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Eurostar',
                'stazione_di_partenza' => 'Roma Termini',
                'stazione_di_arrivo' => 'Firenze SMN',
                'orario_di_partenza' => '14:00:00',
                'orario_di_arrivo' => '15:30:00',
                'codice_treno' => '55667',
                'numero_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Le Frecce',
                'stazione_di_partenza' => 'Napoli Centrale',
                'stazione_di_arrivo' => 'Milano Centrale',
                'orario_di_partenza' => '09:00:00',
                'orario_di_arrivo' => '14:00:00',
                'codice_treno' => '33445',
                'numero_carrozze' => 15,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Railjet',
                'stazione_di_partenza' => 'Vienna Hbf',
                'stazione_di_arrivo' => 'Venezia Santa Lucia',
                'orario_di_partenza' => '06:30:00',
                'orario_di_arrivo' => '13:30:00',
                'codice_treno' => '88990',
                'numero_carrozze' => 9,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
