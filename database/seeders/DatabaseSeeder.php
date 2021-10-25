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
        $data = array(
            'id' => 4,
            'name' => 'NONE',
            'skkm' => 0,
            'skkm_type' => 'NONE'
        );
        $model->addTakeaway($data);
        $data = array(
            'id' => 1,
            'name' => 'EXHORT',
            'skkm' => 1,
            'skkm_type' => 'Pengabdian'
        );
        $model->addTakeaway($data);
        $data = array(
            'id' => 2,
            'name' => 'ALTER',
            'skkm' => 1,
            'skkm_type' => 'Pengabdian'
        );
        $model->addTakeaway($data);
        $data = array(
            'id' => 3,
            'name' => 'TIDBIT',
            'skkm' => 1,
            'skkm_type' => 'Pengabdian'
        );
        $model->addTakeaway($data);
    }
}
