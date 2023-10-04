<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    public function paymentMethod():HasMany
    {
        return $this->hasMany(PaymentMethod::class,'payment_methods_id');
    }
}
