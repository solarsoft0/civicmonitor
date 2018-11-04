<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function politician  () {
        return $this->belongsTo(App\Politician::class);
    }
    
}
