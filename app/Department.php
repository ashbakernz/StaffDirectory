<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
    
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
