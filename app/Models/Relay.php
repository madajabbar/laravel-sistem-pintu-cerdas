<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relay extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function node(){
        return $this->belongsTo(Node::class);
    }
}
