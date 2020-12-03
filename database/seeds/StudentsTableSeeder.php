<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
       	[
        	'name' => 'Monir Hossain',
        	'batch_id' => 'WDPF44',
        	'phone' => '017855222',
        	'address' => 'Dhnmondi',
            'district_id' => 1,
            'photo' => 'ddd'
        ],
        [
        	'name' => 'Hasib Rahman',
        	'batch_id' => 'WDPF44',
        	'phone' => '017855223',
        	'address' => 'Mohammadpur',
            'district_id' => 2,
            'photo' => 'abc'
        ],
        
    ];
         DB::table('students')->insert($data);
    }
}
