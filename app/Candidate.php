<?php

namespace App;

use App\issuePositions;
use App\Membership;
use App\Politician;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Candidate extends Model
{
    use Searchable;


    public function issue_positions()
    {
        return $this->hasMany(IssuePosition::class);
    }

    public function election_type()
    {
        return $this->belongsTo(ElectionType::class);
    }
    public function election()
    {
        return $this->belongsTo(Election::class);
    }
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
    public function Membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function political_parties()
    {
            return  $this->hasManyThrough(PoliticalParty::class, Membership::class);

    }
    
    public function profile()
    {
        return $this->belongsTo(Politician::class);
    }

    public function toSearchableArray()
{
  /**
   * Load the categories relation so that it's available
   *  in the laravel toArray method
   */
  $this->load('membership.political_party','membership.politician');

  return $this->toArray();
}
}
