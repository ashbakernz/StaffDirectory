<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
 
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    // Get gravatar based on employee email address. 
    public function avatar()
    {
        return 'https://api.adorable.io/avatars/150/avatar'. $this->id . '.png'; 
    }
}
