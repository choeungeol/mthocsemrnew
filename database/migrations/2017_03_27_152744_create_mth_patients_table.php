<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthPatientsTable extends Migration
{
    /**
     * Run the migrations.
     * id           : 수진자키
     * name         : 수진자명
     * id_num       : 주민등록번호 (XXXXXX-XXXXXXX, 암호화, validation)
     * birthday     : 생년월일 (XXXXXX, validation)
     * visit_memo   : 내원사유
     * chk_solar    : 양력
     * buss_num     : 사업자등록번호 (XXX-XX-XXXXX, 암호화, validation)
     * buss_nam     : 사업자명
     * phone        : 전화번호 (XX-XXX-XXXX, 암호화, validation)
     * cellphone    : 휴대폰번호 (XXX-XXX-XXXX, 암호화, validation)
     * email        : 이메일 (validation)
     * dis_id       : 장애분류키
     * info_agg     : 정보동의여부
     * foreigner    : 외국인여부
     * married      : 기혼여부
     * chk_list     : 블랙리스트
     * chk_pager    : 문자수신여부
     * chk_email    : 이메일수신여부
     * postal_code  : 우편번호 (validation)
     * addr         : 주소
     * addr_detail  : 상세주소
     * blood        : 혈액형
     * vet_id       : 보훈구분키
     * vet_num      : 보훈번호
     * memo         : 메모
     * @return void
     */
    public function up()
    {
        Schema::create('mth_patients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 40);         //수진자명
            $table->string('id_num', 1000);     //주민번호 (XXXXXX-XXXXXXX) - 암호화/validation
            $table->string('birthday', 8);      //생년월일 (780517 형식) - validation
            $table->string('visit_memo', 1000)->nullable();      //내원사유
            $table->boolean('chk_solar')->defalut(0);       //양력
            $table->string('buss_num', 1000)
                ->nullable();                 //사업자등록번호(XXX-XX-XXXXX 형태) - 암호화/validation
            $table->string('buss_nam', 50)
                ->nullable();                 //사업자명
            $table->string('phone', 1000)
                ->nullable();                 //전화번호 (00-000-0000 형태로 저장) - validation
            $table->string('cellphone', 1000)
                ->nullable();                 //휴대폰번호 (000-000-0000 형태로 저장) - validation
            $table->string('email', 50);        //이메일주소 - validation
            $table->integer('dis_id')
                ->unsigned();                 //장애분류키 - validation
            $table->foreign('dis_id')->references('id')->on('mth_codes');
            $table->boolean('info_agg')->defalut(0);        //정보동의여부
            $table->boolean('foreigner')->defalut(0);       //외국인여부
            $table->boolean('married')->defalut(0);         //기혼여부
            $table->boolean('chk_list')->defalut(0);        //블랙리스트
            $table->boolean('chk_pager')->defalut(0);       //문자 수신여부
            $table->boolean('chk_email')->defalut(0);       //이메일 수신여부
            $table->string('postal_code', 20);  //우편번호 - validation
            $table->string('addr', 50);         //주소
            $table->string('addr_detail', 100); //상세주소
            $table->integer('vet_id')
                ->unsigned()
                ->nullable();                 //보훈구분키
            $table->foreign('vet_id')->references('id')->on('mth_codes');
            $table->string('vet_num', 30)
                ->nullable()           ;      //보훈번호 ->validation
            $table->string('gender', 10)->nullable(); //성별
            $table->string('blood', 10)->nullable(); //혈액형
            $table->string('age', 10)->nullable(); //나이
            $table->text('memo')->nullable();   //메모
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mth_patients');
    }
}
