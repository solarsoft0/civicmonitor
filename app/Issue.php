<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    public function positions()
    {
        return $this->hasMany(App\IssuePosition::class);
    }

    public function candidates()
    {
        return $this->hasManyThrough(App\Candidate::class, App\IssuePosition::class);
    }
}
