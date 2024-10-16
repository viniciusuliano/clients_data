<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts;

class installment extends Model
{
    use HasFactory;

    protected $table = 'Installment';
    protected $fillable = ['accounts_id', 'value_installment', 'due_date', 'paid'];

    public function Account(){
        return $this->belongsTo(Accounts::class);
    }
}
