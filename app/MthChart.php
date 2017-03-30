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

    public function mth_basic_biopsys()
    {
        return $this->hasMany(MthBasicBiopsy::class);
    }

    public function mth_prescribes()
    {
        return $this->hasMany(MthPrescribe::class);
    }

    public function mth_disease()
    {
        return $this->hasMany(MthDisease::class);
    }

}
