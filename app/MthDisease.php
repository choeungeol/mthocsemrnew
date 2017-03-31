<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthDisease extends Model
{
    protected $guarded  = ['id'];

    public function mth_charts()
    {
        return $this->belongsToMany(MthChart::class);
    }

}
