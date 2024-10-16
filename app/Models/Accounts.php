<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;
use App\Models\Installment;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'Accounts';
    protected $fillable = ['client_id', 'value', 'payment_method' ];

    public function clients(){
        return $this->belongsTo(Clients::class);
    }

    public function parcelas(){
        return $this->hasMany(Installment::class);
    }
}
