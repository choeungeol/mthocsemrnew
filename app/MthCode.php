<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthCode extends Model
{
    public function mth_code_group()
    {
        return $this->belongsTo(MthCodeGroup::class);
    }
}
