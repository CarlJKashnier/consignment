<?php

namespace App\Models;

use App\Models\Scopes\ClientOwnedVendor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionLog extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        //Make sure there is no poaching of vendors
        //User must be logged in to see vendors
        static::addGlobalScope(new ClientOwnedVendor);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
