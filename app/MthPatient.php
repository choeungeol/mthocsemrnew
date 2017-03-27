<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthPatient extends Model
{
    /**
     * 입력한 주민번호를 암호화
     * @param type $value 주민등록번호
     */
    public function setIdNumAttribute($value)
    {
        $this->attributes['id_num'] = \Crypt::encrypt($value);
    }

    /**
     * 암호화된 주민번호를 복보화
     * @param type $value 암호화된 칼럼
     * @return type 복보화된 칼럼
     */
    public function getIdNumAttribute($value)
    {
        return \Crypt::decrypt($value);
    }

    /**
     * 입력한 전화번호를 암호화
     * @param type $value 전화번호
     */
    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = \Crypt::encrypt($value);
    }

    /**
     * 암호화된 전화번호를 복보화
     * @param type $value 암호화된 칼럼
     * @return type 복보화된 칼럼
     */
    public function getPhoneAttribute($value)
    {
        return \Crypt::decrypt($value);
    }

    /**
     * 입력한 핸드폰번호를 암호화
     * @param type $value 핸드폰번호
     */
    public function setCellphoneAttribute($value)
    {
        $this->attributes['cellphone'] = \Crypt::encrypt($value);
    }

    /**
     * 암호화된 휴대전화번호를 복보화
     * @param type $value 암호화된 칼럼
     * @return type 복보화된 칼럼
     */
    public function getCellphoneAttribute($value)
    {
        return \Crypt::decrypt($value);
    }
}
