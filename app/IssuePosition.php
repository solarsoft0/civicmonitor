<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuePosition extends Model
{

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

    public function candidate () {
        return $this->belongsTo(Candidate::class);
    }

    

}
