<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politician extends Model
{
  
  public function candidates() {
      $this->hasMany(App\Candidate::class);
  } 


  public function parties()  {
      $this->hasManyThrough(App\PoliticalParty::class, App\Membership::class);
  }

  






    //
}
