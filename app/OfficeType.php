<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeType extends Model
{
    public function offices()
    {
        return $this->hasMany(App\Office::class);
    }
}
