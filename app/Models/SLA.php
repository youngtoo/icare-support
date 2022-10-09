<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SLA extends Model
{
    use HasFactory;

    public function tickets(){
        return $this->hasMany(Ticket::class, 'sla_id','id');
    }
}
