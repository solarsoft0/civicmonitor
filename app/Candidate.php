<?php

namespace App;

use App\issuePositions;
use App\Membership;
use App\Politician;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
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

}
