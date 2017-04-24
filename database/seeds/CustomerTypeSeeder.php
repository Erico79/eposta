<?php

use Illuminate\Database\Seeder;
use App\CustomerType;

class CustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ct = new CustomerType();
        $ct->customer_type_name = 'Company';
        $ct->customer_type_code = 'COMPANY';
        $ct->save();

        $ct = new CustomerType();
        $ct->customer_type_name = 'Individual';
        $ct->customer_type_code = 'INDIVIDUAL';
        $ct->save();
    }
}
