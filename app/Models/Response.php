<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function complaint(){
        return $this->belongsTo(Complaint::class,'complaint_id');
    }
    public function admin(){
        return $this->belongsTo(User::class,'admin_id');
    }
}
