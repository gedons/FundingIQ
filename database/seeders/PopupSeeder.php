<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Popup;

class PopupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = ['Cuba', 'USA', 'Canada', 'Germany', 'France', 'South Africa'];
        $actions = ['invested', 'withdrew', 'deposited'];

        foreach ($countries as $country) {
            foreach ($actions as $action) {
                Popup::create([
                    'country' => $country,
                    'amount' => rand(100, 1000),
                    'action' => $action,
                ]);
            }
        }
    }
}
