<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MthChart extends Model
{

    protected $guarded  = ['id'];

    public function mth_patients()
    {
        return $this->belongsTo(MthPatient::class);
    }
}
