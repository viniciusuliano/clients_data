<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Installment;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'Accounts';
    protected $fillable = [ 'id', 'client_id', 'value', 'payment_method' ];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function parcelas(){
        return $this->hasMany(Installment::class);
    }
}
