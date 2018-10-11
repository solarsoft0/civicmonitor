<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public function politicalParties()
    {
        return $this->hasMany(App\PoliticalParty::class);
    }

    public function positions()
    {
        return $this->hasMany(App\Position::class);

    }
}
