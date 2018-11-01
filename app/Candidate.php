<?php

namespace App;

use App\issuePositions;
use App\Membership;
use App\Politician;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function issuePositions()
    {
        return $this->hasMany(IssuePosition::class);
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
