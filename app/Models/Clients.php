<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $table = 'clients';
    public $timestamps = true;

    public $fillable = ['id', 'name', 'active', 'created_at', 'updated_at'];
}
