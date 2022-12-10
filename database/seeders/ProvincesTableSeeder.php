<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    private $numberOfProvinces = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Provinces table seeder notice'], [
            ['Edit this file to change the number of Provinces created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfProvinces . ' Provinces ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfProvinces);

        for ($i = 0; $i < $this->numberOfProvinces; ++$i) {
            Province::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
