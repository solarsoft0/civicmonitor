<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Politician extends Model
{
      use Searchable;


      protected $casts = [
    'birth_date' => 'date',
    'death_date' => 'date',
    'start_date' => 'date',
    'end_date' => 'date',


];

public function Memberships() {
    return $this->hasMany(Membership::class);
}

  public function candidates() {
    return  $this->hasManyThrough(Candidate::class, Membership::class);
    // return  $this->hasMany(Candidate::class);
  } 


  public function political_parties()  {
    return  $this->hasManyThrough(PoliticalParty::class, Membership::class);
  }

  
 




    //
}
