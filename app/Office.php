<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function types() {
        return $this->hasOne(App\OfficeType::class);
    }
}
