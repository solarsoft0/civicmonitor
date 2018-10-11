<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    public function types(){
        return $this->belongsTo(App\ElectionType::class);
    }
}
