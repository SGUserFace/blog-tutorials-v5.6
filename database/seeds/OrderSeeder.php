<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();

        foreach (range(1, 140) as $key => $each) {
            Order::firstOrCreate([
                'transaction_id' => null,
                'amount' => 20 + $each,
                'payment_status' => 0,
            ]);
        }
    }
}
