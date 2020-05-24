<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "BAXTER OF CALIFORNIA",
            "SUAVETICO",
            "AMERICAN CREW"
        ];
        foreach ($names as $name) {
            $manufacturer = new Manufacturer();
            $manufacturer->name = $name;
            $manufacturer->save();
        }

    }
}
