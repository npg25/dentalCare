<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalModel extends Model
{
    protected $table = 'journals';

    protected $fillable = [
        'patient_name',
        'issue',
        'treatment',
        'before',
        'after'
    ];
}
