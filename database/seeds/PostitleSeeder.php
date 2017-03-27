<?php

use Illuminate\Database\Seeder;

class PostitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Auto Increments 초기화
        DB::table('postitles')->truncate();


        DB::table('postitles')->insert([
            'pos_code'    => '001',
            'pos_div_code' => '01',
            'pos_name'       => '원장',
            'pos_use'       => 1,
            'pos_memo'       => '원장',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '002',
            'pos_div_code' => '02',
            'pos_name'       => '부서장',
            'pos_use'       => 1,
            'pos_memo'       => '부서장',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '003',
            'pos_div_code' => '03',
            'pos_name'       => '의사',
            'pos_use'       => 1,
            'pos_memo'       => '의사',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '004',
            'pos_div_code' => '04',
            'pos_name'       => '전임의사',
            'pos_use'       => 1,
            'pos_memo'       => '전임의사',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '005',
            'pos_div_code' => '05',
            'pos_name'       => '인턴',
            'pos_use'       => 1,
            'pos_memo'       => '인턴',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '006',
            'pos_div_code' => '06',
            'pos_name'       => '간호부장',
            'pos_use'       => 1,
            'pos_memo'       => '간호부장',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '007',
            'pos_div_code' => '07',
            'pos_name'       => '간호사',
            'pos_use'       => 1,
            'pos_memo'       => '간호사',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        DB::table('postitles')->insert([
            'pos_code'    => '008',
            'pos_div_code' => '08',
            'pos_name'       => '일반 직원',
            'pos_use'       => 1,
            'pos_memo'       => '일반 직원',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

    }
}
