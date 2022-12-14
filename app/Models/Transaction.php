<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // public function transactionDetails()
    // {
    //     return $this->hasMany(TransactionDetail::class, 'transaction_id');
    // }

    public function transaction_details()
    {
    	return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }
}
