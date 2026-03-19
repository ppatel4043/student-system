<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // This allows these fields to be filled by your forms
    protected $fillable = ['name', 'email', 'phone']; 
}