<?php

namespace App\Models;

use App\Models\InspectionNote;
use App\Models\ObstetricHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'date_birth', 'pregnancy_to', 'last_chield_age', 
        'religion', 'education', 'blood_type', 'job', 'bpjs_number',
        'address', 'phone_number'
    ];

    public function obstetrics(){
        return $this->hasMany(ObstetricHistory::class, 'patients_id','id');
    }

    public function inspection(){
        return $this->hasMany(InspectionNote::class, 'patients_id','id');
    }
}
