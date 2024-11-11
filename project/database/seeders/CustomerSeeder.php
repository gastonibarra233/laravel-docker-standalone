<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Device;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Customer::factory(10)->create()->each(function($customer){
            Device::factory(rand(1,2))->create([
                'customer_id' => $customer->id,
            ]);
        });
    }
}
