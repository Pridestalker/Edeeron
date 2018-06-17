<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecurringExpense extends Model
{
    //
    protected $fillable = [
        'user_id',
        'source',
        'amount',
        'frequency'
    ];
}
