<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\Permission;
use App\Models\Warehouse;
use Database\Factories\item_warehouseFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $warehouses = Warehouse::factory(5)->create();
        $items = Item::factory(5)->create();
        \App\Models\User::factory()->create([
            'name' => 'Jordan Smith',
            'email' => 'test@example.com',
        ]);

        

    }
}
