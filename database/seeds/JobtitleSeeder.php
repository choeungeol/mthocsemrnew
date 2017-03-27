<?php

use Illuminate\Database\Seeder;

class JobtitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints*/
        // Auto Increments 초기화

        DB::table('jobtitles')->truncate();



        //1. 내과
        DB::table('jobtitles')->insert([
            'jobcode'      => '001',
            'code'    => '01',
            'name'       => '내과',
            'use'       => 1,
            'memo'       => '내과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //2. 소아청소년과
        DB::table('jobtitles')->insert([
            'jobcode'      => '002',
            'code'    => '02',
            'name'       => '소아청소년과',
            'use'       => 1,
            'memo'       => '소아청소년과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //3. 신경과
        DB::table('jobtitles')->insert([
            'jobcode'      => '003',
            'code'    => '03',
            'name'       => '신경과',
            'use'       => 1,
            'memo'       => '신경과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //4. 정신과
        DB::table('jobtitles')->insert([
            'jobcode'      => '004',
            'code'    => '04',
            'name'       => '정신과',
            'use'       => 1,
            'memo'       => '정신과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //5. 피부과
        DB::table('jobtitles')->insert([
            'jobcode'      => '005',
            'code'    => '05',
            'name'       => '피부과',
            'use'       => 1,
            'memo'       => '피부과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //6. 외과
        DB::table('jobtitles')->insert([
            'jobcode'      => '006',
            'code'    => '06',
            'name'       => '외과',
            'use'       => 1,
            'memo'       => '외과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //7. 산부인과
        DB::table('jobtitles')->insert([
            'jobcode'      => '007',
            'code'    => '07',
            'name'       => '산부인과',
            'use'       => 1,
            'memo'       => '산부인과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //8. 안과
        DB::table('jobtitles')->insert([
            'jobcode'      => '008',
            'code'    => '08',
            'name'       => '안과',
            'use'       => 1,
            'memo'       => '안과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //9. 이비인후과
        DB::table('jobtitles')->insert([
            'jobcode'      => '009',
            'code'    => '09',
            'name'       => '이비인후과',
            'use'       => 1,
            'memo'       => '이비인후과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
        //10. 비뇨기과
        DB::table('jobtitles')->insert([
            'jobcode'      => '010',
            'code'    => '10',
            'name'       => '비뇨기과',
            'use'       => 1,
            'memo'       => '비뇨기과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);

        //11. 원무과
        DB::table('jobtitles')->insert([
            'jobcode'      => '011',
            'code'    => '11',
            'name'       => '원무과',
            'use'       => 1,
            'memo'       => '원무과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);


        //12. 자재과
        DB::table('jobtitles')->insert([
            'jobcode'      => '012',
            'code'    => '12',
            'name'       => '자재과',
            'use'       => 1,
            'memo'       => '자재과',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
/*        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints*/

    }

}
