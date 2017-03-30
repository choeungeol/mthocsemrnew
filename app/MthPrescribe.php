<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthPrescribe extends Model
{
    public function mth_charts()
    {
        return $this->belongsToMany(MthChart::class);
    }

}
