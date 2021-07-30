<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'user_id',
        'stationery_id',
        'amount',
        'payment_status',
        'toyyibpay_bill_code'
    ];

    public function getRealAmountAttribute()
    {
        return 'RM'.$this->amount/100;
    }

    public function getPaymentLinkAttribute()
    {
        return 'https://dev.toyyibpay.com/'.$this->toyyibpay_bill_code;
    }
}
