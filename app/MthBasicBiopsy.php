<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthBasicBiopsy extends Model
{

    protected $guarded  = ['id'];

    public function mth_charts()
    {
        return $this->belongsTo(MthChart::class);
    }
}
