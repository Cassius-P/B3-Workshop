<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    use Resizable;
    protected $table = 'idees';
    protected $primaryKey = 'id';
    
}
