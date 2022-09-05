<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registeration extends Model
{
    use HasFactory;
    protected $fillable=['lead_id','father_name ','course', 'discount','installments', 'course_status','admission_date ','fee_date', 'status','refrel', 'refrel_percentage','batch_id'];
    public function Lead() {
        return $this->HasOne(Lead::class);
    }
}
