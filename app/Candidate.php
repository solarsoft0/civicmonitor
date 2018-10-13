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

    public function politicalParties()
    {
        return $this->hasMany(Membership::class);
    }

    public function profile()
    {
        return $this->belongsTo(Politician::class);
    }

}
