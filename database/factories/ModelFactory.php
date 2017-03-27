<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\MthPatient::class, function (Faker\Generator $faker) {

    $faker = \Faker\Factory::create('ko_KR');

    //장애분류
    $disCodes = App\MthCodeGroup::find(1)->mth_codes()->pluck('id')->toArray();

    //보훈구분키
    $vetCodes = App\MthCodeGroup::find(8)->mth_codes()->pluck('id')->toArray();

    return [
        'name'          => $faker->name,
        'id_num'        => $faker->regexify('[0-9]{2}(0[1-9]|1[012])(0[1-9]|1[0-9]|2[0-9]|3[01])-[012349][0-9]{6}'),
        'birthday'      => $faker->date('Ymd'),
        'chk_solar'     => $faker->boolean,
        'buss_num'      => $faker->regexify('([0-9]{3})-([0-9]{2})-([0-9]{5})'),
        'buss_nam'      => $faker->company,
        'phone'         => $faker->regexify('^0(2|3[1-3]|4[1-4]|5[1-5]|6[1-4])-(\d{3,4})-(\d{4})$'),
        'cellphone'     => $faker->regexify('^01(0|1|6|7|8|9)-([0-9]{3,4})-([0-9]{4})$'),
        'email'         => $faker->email,
        'dis_id'        => $faker->randomElement($disCodes),
        'info_agg'      => $faker->boolean,
        'foreigner'     => false,
        'married'       => $faker->boolean,
        'chk_list'      => $faker->boolean,
        'chk_pager'     => $faker->boolean,
        'chk_email'     => $faker->boolean,
        'postal_code'   => $faker->postcode,
        'addr'          => $faker->address,
        'addr_detail'   => $faker->streetAddress,
        'vet_id'        => $faker->randomElement($vetCodes),
        'vet_num'       => $faker->regexify('[1-9]{2}'),
        'memo'          => $faker->paragraph,
        'created_at'    => $faker->dateTimeBetween($startDate = '-3 years', $endDate = '-1 years'),
        'updated_at'    => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
    ];
});
