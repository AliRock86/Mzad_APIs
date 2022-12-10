<?php

namespace Database\Seeders;

use App\Models\MzadType;
use Illuminate\Database\Seeder;

class MzadTypesTableSeeder extends Seeder
{
    private $numberOfMzadTypes = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['MzadTypes table seeder notice'], [
            ['Edit this file to change the number of MzadTypes created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfMzadTypes . ' MzadTypes ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfMzadTypes);

        for ($i = 0; $i < $this->numberOfMzadTypes; ++$i) {
            MzadType::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
