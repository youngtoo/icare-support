<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralStatus extends Model
{
    use HasFactory;

    // Make sure that the table name is correct
    protected $table = 'general_statuses';

    protected $primaryKey = 'gs_id';
    
}
