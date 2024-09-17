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
        $countries = [
            'Cuba',
            'USA',
            'Canada',
            'Germany',
            'France',
            'South Africa',
            'United Kingdom',
            'Australia',
            'Brazil',
            'Japan',
            'India',
            'China',
            'Mexico',
            'Italy',
            'Spain',
            'Nigeria',
            'Argentina',
            'Russia',
            'Netherlands',
            'New Zealand',
            'Sweden',
            'South Korea',
            'Indonesia',
            'Switzerland',
            'Norway',
            'Saudi Arabia',
            'Egypt',
            'Philippines',
            'Turkey',
            'Malaysia',
            'Kenya',
            'Vietnam',
            'Thailand',
            'United Arab Emirates',
            'Pakistan',
            'Singapore',
            'Ukraine',
            'Chile',
            'Portugal',
            'Belgium',
            'Poland',
            'Greece',
            'Ireland'
        ];
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
