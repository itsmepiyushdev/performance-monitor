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
    public function application(){
        return $this->belongsTo(Application::class);
    }
    public function other_activity(){
        return $this->belongsTo(OtherActivity::class);
    }
}
