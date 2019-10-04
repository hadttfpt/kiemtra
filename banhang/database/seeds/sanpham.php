<?php

use Illuminate\Database\Seeder;

class sanpham extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0;$i<20;$i++){
            DB::table('sanpham')->insert([
                'thubmnail'     => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-ZbP7kUFh3koQ5BR2n3qfwWPcddhDo0mNhunKy9DMtq_adCQzyA',
                'title'   => 'Ao khoac',
                'price'      => 280.000,
                'discount'        => 200.000,
            ]);
        }
    }
}
