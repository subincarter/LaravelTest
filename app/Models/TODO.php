<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TODO extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $table = 'todo';
    protected $fillable=[
        'id',
        'task',
        'completed',
        'dueDate',
    ];

    public function subTasks(){
         return $this->belongsTo(TODOSub::class,'id','taskID');
    }
    
}
