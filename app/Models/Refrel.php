<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
class Refrel extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','balance','status','lead_id'];

    // public function Lead() {
    //     return $this->belongsTo(Lead::class);
    // }
}
