<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{


   public function deliveryArea() : BelongsTo
    {
        return $this->belongsTo(DeliveryArea::class);

    }}
