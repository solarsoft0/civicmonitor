<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\politicalParty;
class Position extends Model
{

    public  function politicalParty(){
        return $this->belongTo(PoliticalParty::class);
    }

    

}
