<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TODOSub extends Model
{
    // use HasFactory;
    protected $table = 'todoSub';
    protected $fillable=[
        'taskID',
        'subTask',
        'completed'
    ];
    public function task(){
        return $this->belongsTo(TODO::class,'id','taskID');
   }
}
