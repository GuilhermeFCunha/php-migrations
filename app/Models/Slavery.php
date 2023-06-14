<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slavery extends Model
{
    protected $table = 'slave_labour';
    protected $atributte = [
        'id',
        'name',
        'farm',
        'state',
        'document',
        'process_t',
        'workers_involved',
        'status',
        'year',
        'inclusion_date'
    ];
}
