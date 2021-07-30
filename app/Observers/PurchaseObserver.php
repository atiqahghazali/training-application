<?php

namespace App\Observers;

use App\Models\Purchase;
use Illuminate\Support\Str;

class PurchaseObserver
{
    public function creating(Purchase $purchase)
    {
        $purchase->uuid=Str::uuid();
    }
}
