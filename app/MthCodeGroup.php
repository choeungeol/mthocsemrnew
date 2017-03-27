<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthCodeGroup extends Model
{
    public function mth_codes()
    {
        return $this->hasMany(MthCode::class);
    }
}
