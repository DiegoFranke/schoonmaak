<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Huurplek extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'bezet', 'schoon', 'start_date' , 'end_date'
    ];
}
