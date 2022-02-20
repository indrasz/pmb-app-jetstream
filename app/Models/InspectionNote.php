<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InspectionNote extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'patients_id', 'examiner', 'date','complaint', 'uk_mg', 
        'bb_kg', 'td_mmhg', 'lila_cm', 'fundus_hight', 'fetus_location',
        'immunization','add_blood_tablet','lab', 'analysis','governance','counseling'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class, 'patients_id', 'id');
    }
}
