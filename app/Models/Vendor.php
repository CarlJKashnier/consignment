<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\ClientOwnedVendor;

class Vendor extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        //Makesure there is no poaching of vendors
        //User must be logged in to see vendors
        static::addGlobalScope(new ClientOwnedVendor);
    }
}
