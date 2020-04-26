<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    protected $guarded = [];

    public function getNameUserTransactions() {
        return $this->belongsTo(User::class, 'transactions_user_id');
    }
}
