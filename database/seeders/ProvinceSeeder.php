<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert([
            ['province_code'=>'01','province_title_1'=>'Banteay Meanchey','province_title_2'=>'បន្ទាយមានជ័យ'],
            ['province_code'=>'02','province_title_1'=>'Battambang','province_title_2'=>'បាត់ដំបង'],
            ['province_code'=>'03','province_title_1'=>'Kampong Cham','province_title_2'=>'កំពង់ចាម'],
            ['province_code'=>'04','province_title_1'=>'Kampong Chhnang','province_title_2'=>'កំពង់ឆ្នាំង'],
            ['province_code'=>'05','province_title_1'=>'Kampong Speu','province_title_2'=>'កំពង់ស្ពឺ'],
            ['province_code'=>'06','province_title_1'=>'Kampong Thom','province_title_2'=>'កំពង់ធំ'],
            ['province_code'=>'07','province_title_1'=>'Kampot','province_title_2'=>'កំពត'],
            ['province_code'=>'08','province_title_1'=>'Kandal','province_title_2'=>'កណ្តាល'],
            ['province_code'=>'09','province_title_1'=>'Koh Kong','province_title_2'=>'កោះកុង'],
            ['province_code'=>'10','province_title_1'=>'Kratié','province_title_2'=>'ក្រចេះ'],
            ['province_code'=>'11','province_title_1'=>'Mondulkiri','province_title_2'=>'មណ្ឌលគិរី'],
            ['province_code'=>'12','province_title_1'=>'Phnom Penh','province_title_2'=>'ភ្នំពេញ'],
            ['province_code'=>'13','province_title_1'=>'Preah Vihear','province_title_2'=>'ព្រះវិហារ'],
            ['province_code'=>'14','province_title_1'=>'Prey Veng','province_title_2'=>'ព្រៃវែង'],
            ['province_code'=>'15','province_title_1'=>'Pursat','province_title_2'=>'ពោធិ៍សាត់'],
            ['province_code'=>'16','province_title_1'=>'Ratanakiri','province_title_2'=>'រតនគិរី'],
            ['province_code'=>'17','province_title_1'=>'Siem Reap','province_title_2'=>'សៀមរាប'],
            ['province_code'=>'18','province_title_1'=>'Preah Sihanouk','province_title_2'=>'ព្រះសីហនុ'],
            ['province_code'=>'19','province_title_1'=>'Stung Treng','province_title_2'=>'ស្ទឹងត្រែង'],
            ['province_code'=>'20','province_title_1'=>'Svay Rieng','province_title_2'=>'ស្វាយរៀង'],
            ['province_code'=>'21','province_title_1'=>'Takéo','province_title_2'=>'តាកែវ'],
            ['province_code'=>'22','province_title_1'=>'Oddar Meanchey','province_title_2'=>'ឧត្តរមានជ័យ'],
            ['province_code'=>'23','province_title_1'=>'Kep','province_title_2'=>'កែប'],
            ['province_code'=>'24','province_title_1'=>'Pailin','province_title_2'=>'ប៉ៃលិន'],
            ['province_code'=>'25','province_title_1'=>'Tboung Khmum','province_title_2'=>'ត្បូងឃ្មុំ']
        ]);
    }
}
