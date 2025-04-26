<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footbaler extends Model
{
    use HasFactory;

    protected $table = 'footballers';

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'birth_date',
        'team_id',
        'country',
    ];


    public function team()
    {
        return $this->belongsTo(Team::class); 
    }

    protected $dates = ['birth_date'];

    
    protected $casts = [
        'birth_date' => 'date', 
    ];

   
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        return now()->diffInYears($this->birth_date);
    }
}
