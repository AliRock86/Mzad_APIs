<?php

namespace Database\Seeders;

use App\Models\Outbidding;
use Illuminate\Database\Seeder;

class OutbiddingsTableSeeder extends Seeder
{
    private $numberOfOutbiddings = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->table(['Outbiddings table seeder notice'], [
            ['Edit this file to change the number of Outbiddings created'],
        ]);

        $this->command->info('Creating ' . $this->numberOfOutbiddings . ' Outbiddings ...');
        $bar = $this->command->getOutput()->createProgressBar($this->numberOfOutbiddings);

        for ($i = 0; $i < $this->numberOfOutbiddings; ++$i) {
            Outbidding::factory()->create();
            $bar->advance();
        }

        $bar->finish();
        $this->command->info('');
    }
}
