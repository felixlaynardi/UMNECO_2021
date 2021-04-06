<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mission;
use Mission as GlobalMission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $model = new Mission();
        for ($i = 1; $i < 13; $i++) {
            $data = array(
                'mission_utopia_id' => $i,
                'mission_desc' => 'Utopia' . $i
            );
            $model->addUtopia($data);
        }
        for ($i = 1; $i < 13; $i++) {
            $data = array(
                'mission_rise_id' => $i,
                'mission_desc' => 'Rise' . $i
            );
            $model->addRise($data);
        }

        $data = array(
            'mission_utile_id' => 1,
            'mission_desc' => 'Utopia' . 1
        );
        $model->addUtile($data);

        $data = array(
            'mission_raconteur_id' => 1,
            'mission_desc' => 'Utopia' . 1
        );
        $model->addRaconteur($data);
    }
}
