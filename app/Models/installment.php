<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts;

class Installment extends Model
{
    use HasFactory;

    protected $table = 'Installment';
    protected $fillable = ['id', 'value_installment', 'due_date', 'paid'];

    public function account(){
        return $this->belongsTo(Accounts::class);
    }
}
