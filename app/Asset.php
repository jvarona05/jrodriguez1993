<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    /**
     * Get wallets.
     */
    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
}
