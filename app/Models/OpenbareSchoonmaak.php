<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenbareSchoonmaak extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'dag_schoon'
    ];
}
