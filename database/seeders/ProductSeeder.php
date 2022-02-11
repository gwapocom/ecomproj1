<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'LG mobile',
            'price'=>'200',
            'description'=>'A smart phone with 4gb ram',
            'category'=>'mobile',
            'gallery'=>'https://www.lg.com/ph/images/mobile-phones/md05859659/LGM400DK_350_210717-v1.jpg'
            ],

            [
                'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smart phone with 8gb ram',
            'category'=>'mobile',
            'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-5g-oversea/listpage/Phone-list-product-list-stellar-black-427-x-600.png.thumb.webp'
            ],

            [
                'name'=>'Panasonic Tv',
            'price'=>'400',
            'description'=>'A smart tv',
            'category'=>'tv',
            'gallery'=>'https://streamtelly.com/wp-content/uploads/2021/01/Change-DNS-Settings-On-Panasonic-Viera-Smart-TV.jpg'
            ],

            [
                'name'=>'Sony tv',
            'price'=>'200',
            'description'=>'A smart tv with steroids',
            'category'=>'tv',
            'gallery'=>'https://www.techinn.com/f/13819/138192974/sony-kd43x81j-43-4k-led-tv.jpg'
            ],

            [
                'name'=>'Samsung tv',
            'price'=>'800',
            'description'=>'A smart tv with a big dick',
            'category'=>'tv',
            'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/ph/qa85qn85aagxxp/gallery/ph-neo-qled-qn85a-qa85qn85aagxxp-413314760?$684_547_PNG$'
            ],


            

        ]);
    }
}
