<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    public function positions()
    {
        return $this->hasMany(IssuePosition::class);
    }

    public function candidates()
    {
        return $this->hasManyThrough(Candidate::class, IssuePosition::class);
    }
    public function election() {
        return $this->belongsTo(Election::class);
    }
}
