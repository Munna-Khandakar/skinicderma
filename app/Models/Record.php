<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = [
    'patient_id',
    'service',
    'advice_sitting',
    'sitting_completed',
    'total_bill',
    'paid_amount',
    'next_date',
];
}
