<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable=['application_name','active_status'];

    public function performances(){
        $this->hasMany(Performance::class);
    }
}
