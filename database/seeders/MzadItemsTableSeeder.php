<?php

namespace Database\Seeders;

use App\Models\MzadItem;
use Illuminate\Database\Seeder;

class MzadItemsTableSeeder extends Seeder
{
    private $numberOfMzadItems = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['MzadItems table seeder notice'], [
            ['Edit this file to change the number of MzadItems created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfMzadItems . ' MzadItems ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfMzadItems);

        for ($i = 0; $i < $this->numberOfMzadItems; ++$i) {
            MzadItem::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
