<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accounts;

class Clients extends Model
{
    use HasFactory;

    protected $table = 'Clients';

    protected $fillable = ['name', 'phone', 'email'];

    public function accounts(){
        return $this->hasMany(Accounts::class);
    }


}
