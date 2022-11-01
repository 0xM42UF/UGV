<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dept extends Model
{
    use HasFactory;
    protected $fillable=['dept_name','dept_code','std_name','std_id','std_mail'];
}
