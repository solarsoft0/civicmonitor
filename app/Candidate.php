<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function issuePositions()
    {
        return $this->hasMany(App\IssuePosition::class);
    }

    public function politicalParties()
    {
        return $this->hasMany(App\Membership::class);
    }


    public function profile()  {
        return $this->belongsTo(App\Politician::class);
    }


}
