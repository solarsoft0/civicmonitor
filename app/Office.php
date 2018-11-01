<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function office_type() {
        return $this->BelongsTo(OfficeType::class);
    }
}
