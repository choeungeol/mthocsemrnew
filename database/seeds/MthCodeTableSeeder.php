<?php

use Illuminate\Database\Seeder;

class MthCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 장애분류코드
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS001',
            'code_name'         => '해당없음',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS002',
            'code_name'         => '장루 요루장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS003',
            'code_name'         => '신장장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS004',
            'code_name'         => '심장장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS005',
            'code_name'         => '간장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS006',
            'code_name'         => '호흡기장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS007',
            'code_name'         => '간질장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS008',
            'code_name'         => '지체장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS009',
            'code_name'         => '죄병변장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS010',
            'code_name'         => '시각장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS011',
            'code_name'         => '청각장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS012',
            'code_name'         => '언어장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS013',
            'code_name'         => '안면장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS014',
            'code_name'         => '지적장애 ',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS015',
            'code_name'         => '자폐성장애 ',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 1,
            'user_id'           => 1,
            'code_id'           => 'DIS016',
            'code_name'         => '정신장애 ',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 종별
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 2,
            'user_id'           => 1,
            'code_id'           => 'DIV001',
            'code_name'         => '1종',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 2,
            'user_id'           => 1,
            'code_id'           => 'DIV002',
            'code_name'         => '2종',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 2,
            'user_id'           => 1,
            'code_id'           => 'DIV003',
            'code_name'         => '행려',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 2,
            'user_id'           => 1,
            'code_id'           => 'DIV004',
            'code_name'         => '2장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 2,
            'user_id'           => 1,
            'code_id'           => 'DIV005',
            'code_name'         => '외국',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 유형
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 3,
            'user_id'           => 1,
            'code_id'           => 'KND001',
            'code_name'         => '보험',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 3,
            'user_id'           => 1,
            'code_id'           => 'KND002',
            'code_name'         => '의급',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 3,
            'user_id'           => 1,
            'code_id'           => 'KND003',
            'code_name'         => '일반',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 3,
            'user_id'           => 1,
            'code_id'           => 'KND004',
            'code_name'         => '자보',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 3,
            'user_id'           => 1,
            'code_id'           => 'KND005',
            'code_name'         => '산재',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 3,
            'user_id'           => 1,
            'code_id'           => 'KND006',
            'code_name'         => '100',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 관계
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 4,
            'user_id'           => 1,
            'code_id'           => 'REL001',
            'code_name'         => '본인',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 4,
            'user_id'           => 1,
            'code_id'           => 'REL002',
            'code_name'         => '배우자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);


        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 4,
            'user_id'           => 1,
            'code_id'           => 'REL003',
            'code_name'         => '자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 4,
            'user_id'           => 1,
            'code_id'           => 'REL004',
            'code_name'         => '부모',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 4,
            'user_id'           => 1,
            'code_id'           => 'REL005',
            'code_name'         => '기타',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 자격구분
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 5,
            'user_id'           => 1,
            'code_id'           => 'QUL001',
            'code_name'         => '자격1',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 예외구분
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC001',
            'code_name'         => '약국이 없는지역, 재해발생',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC002',
            'code_name'         => '응급환자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC003',
            'code_name'         => '정신보건법에 의해 정신요양',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC004',
            'code_name'         => '전염병예방법에 의한 제1종',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC005',
            'code_name'         => '국가유공자등 예우 및 지원에',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC006',
            'code_name'         => '장애인복지관련법령에 의한',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC007',
            'code_name'         => '파킨슨질환자,나병환자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC008',
            'code_name'         => '장기이식을 받은자, 후천성',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC009',
            'code_name'         => '사회복지사어법에 의한 사회',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC010',
            'code_name'         => '가정간호대상자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC011',
            'code_name'         => '협진(한양방,야한방,양양방',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC012',
            'code_name'         => '현행법에 의한 교정시설, 소',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC013',
            'code_name'         => '전염병예방접종약, 진단용의',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC014',
            'code_name'         => '경핵예방법에의하여 결핵치',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC015',
            'code_name'         => '의료기관 조제실 제제',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC016',
            'code_name'         => '6세 이하의 소아에게 투약',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC017',
            'code_name'         => '운반 및 보관중 냉동, 냉장',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC018',
            'code_name'         => '주사제를 원내 투약한 경우',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC019',
            'code_name'         => '항암제중 주사제',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC020',
            'code_name'         => '검사를 위하여 필요하거나',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 6,
            'user_id'           => 1,
            'code_id'           => 'EXC021',
            'code_name'         => '예외약제와 동시 투여하는',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 초재검진
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM001',
            'code_name'         => '해당없음',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM002',
            'code_name'         => '영유아검진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM003',
            'code_name'         => '일반건강검진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM004',
            'code_name'         => '생애전환기건강검진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM005',
            'code_name'         => '암검진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM006',
            'code_name'         => '무료진찰',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM007',
            'code_name'         => '기타진찰',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM008',
            'code_name'         => '물리치료',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM009',
            'code_name'         => '가족내원',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM010',
            'code_name'         => '가정간호',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM011',
            'code_name'         => '가정(심야)',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM012',
            'code_name'         => '원외(시설)',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM013',
            'code_name'         => '일반검진-비',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM014',
            'code_name'         => '만성질환관리',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 7,
            'user_id'           => 1,
            'code_id'           => 'EXM015',
            'code_name'         => '심야-만성질환',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 보훈내용
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET001',
            'code_name'         => '해당없음',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET002',
            'code_name'         => '무공수훈자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET003',
            'code_name'         => '재일학도의용군인',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET004',
            'code_name'         => '전몰군경, 순직군경, 4.19혁명대상자및특별',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET005',
            'code_name'         => '6.25전몰군경자녀수당을 지급받는자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET006',
            'code_name'         => '6.25전몰군경자녀수당을 지급받는자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET007',
            'code_name'         => '참전유공자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET008',
            'code_name'         => '참전유공자',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 8,
            'user_id'           => 1,
            'code_id'           => 'VET009',
            'code_name'         => '상이자 7급',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 공상만성
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ001',
            'code_name'         => '30일재진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ002',
            'code_name'         => '90일재진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ003',
            'code_name'         => '평생재진',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ004',
            'code_name'         => '공상진료',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ005',
            'code_name'         => '보훈(수급권자)',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ006',
            'code_name'         => '보훈(무자격자)',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ007',
            'code_name'         => '6.25참전및',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ008',
            'code_name'         => '군인및공무원',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ009',
            'code_name'         => '차상위1종',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ010',
            'code_name'         => '차상위2종',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ011',
            'code_name'         => '차상위2종장애',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ012',
            'code_name'         => '희귀난치성질환',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 9,
            'user_id'           => 1,
            'code_id'           => 'INJ013',
            'code_name'         => '긴급복지의료',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 직원구분
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 10,
            'user_id'           => 1,
            'code_id'           => 'EMP001',
            'code_name'         => '의사',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 10,
            'user_id'           => 1,
            'code_id'           => 'EMP002',
            'code_name'         => '간호사',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 10,
            'user_id'           => 1,
            'code_id'           => 'EMP003',
            'code_name'         => '간호조무사',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        // 지원실 구분
        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 11,
            'user_id'           => 1,
            'code_id'           => 'AID001',
            'code_name'         => '방사선실',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 11,
            'user_id'           => 1,
            'code_id'           => 'AID001=2',
            'code_name'         => '물리치료실',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

        DB::table('mth_codes')->insert([
            'mth_code_group_id' => 11,
            'user_id'           => 1,
            'code_id'           => 'AID001=2',
            'code_name'         => '엑스레이실',
            'created_at'        => \Carbon\Carbon::now(),
            'updated_at'        => \Carbon\Carbon::now(),
        ]);

    }
}
