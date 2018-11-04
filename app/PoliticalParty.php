<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoliticalParty extends Model
{
    protected $casts = [
    'founded_date' => 'date',
];
}
