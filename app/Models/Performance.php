<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    protected $fillable=['user_id','application_id','other_activity_id','description','work_date','active_status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
