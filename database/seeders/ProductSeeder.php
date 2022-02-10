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
            'gallery'=>'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%3AANd9GcTVgmiepkP3Nzbazm6pXBnxA1qMbx-GsxC5ShiomuonMxVIiv_0%26s&sp=1644486074T63dadee351a909d5c246d3c624f44eb464d31d564fa7fc3c02812046d0be8983'
            ],

            [
                'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smart phone with 8gb ram',
            'category'=>'mobile',
            'gallery'=>'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%3AANd9GcSMnUTaXA35Fr48lsvqHmmASlfJA6RN6zh-G8SqyFtQRfBJuzSB%26s&sp=1644486098Tb5b3e27738a9c3ba66749425543b802914f2b06938abf5dbb470a2f08738b9b5'
            ],

            [
                'name'=>'Panasonic Tv',
            'price'=>'400',
            'description'=>'A smart tv',
            'category'=>'tv',
            'gallery'=>'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%3AANd9GcQ432N4XG-PjSmL3of7eKIkDAWy1fI3tRum24Xgyx7ONjxD2jQ%26s&sp=1644483403Ta679337bf15c6eb12d791cc999142addec37fd24a5140f59aa9ea9209cd98409'
            ],

            [
                'name'=>'Sony tv',
            'price'=>'200',
            'description'=>'A smart tv with steroids',
            'category'=>'tv',
            'gallery'=>'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%3AANd9GcQw_ota4rjtPycX_VmXmXT8KArS6bE3FJk4okZydltqkoQJ0N0%26s&sp=1644483403Tbdff0c31bb1d37bc6d1a41f88d80ffee80b87481d3a436db89d330b327aa2901'
            ],

            [
                'name'=>'Samsung tv',
            'price'=>'800',
            'description'=>'A smart tv with a big dick',
            'category'=>'tv',
            'gallery'=>'https://www.startpage.com/av/proxy-image?piurl=https%3A%2F%2Fencrypted-tbn0.gstatic.com%2Fimages%3Fq%3Dtbn%3AANd9GcRC3Z3k7t1HnIgibFCtxVFS3oFsBPwgm2ITCus5D-r9pvKTXm4%26s&sp=1644483403Tf94c97428a86d5c083eada4667bad395913656ad61829c64204d730858eab242'
            ],


            

        ]);
    }
}
