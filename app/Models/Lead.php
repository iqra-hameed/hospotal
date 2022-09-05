<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Refrel;

class Lead extends Model
{
    use HasFactory;
    protected $fillable=['name','phone ','date', 'purpose','lead_status', 'refrel'];

    public function registeration() {
        return $this->BelongsTo(Registeration::class,);
         }
}


