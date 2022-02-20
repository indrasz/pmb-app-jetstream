<?php

namespace App\Models;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ObstetricHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'patients_id', 'pregnancy_to', 'year', 'still_born', 
        'aterm_born', 'spontant_born', 'weight_height', 'maternity_place', 'condition',
        'complication'
    ];

    public function patient(){
        return $this->belongsTo(Patient::class, 'patients_id', 'id');
    } 

    
}
