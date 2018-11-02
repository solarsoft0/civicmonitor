<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectionType extends Model
{
        public $timestamps = false;

    public function elections(){

    return $this->hasMany(App\Election::class);
    }
}
