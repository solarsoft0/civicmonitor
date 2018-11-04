<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{

       protected $casts = [
    'start_date' => 'date',
    'end_date' => 'date',
];

    public function political_party()
    {
        return $this->BelongsTo(PoliticalParty::class);
    }
    public function politician()
    {
        return $this->BelongsTo(Politician::class);
    }

    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }

    public function position()
    {
        return $this->BelongsTo(Position::class);

    }
}
