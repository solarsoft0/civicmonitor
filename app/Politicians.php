<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politicians extends Model
{

public function politicalParty(){
    return $this->hasMany(PoliticalParty::class);
}

}
