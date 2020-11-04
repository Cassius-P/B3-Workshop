<?php

namespace App\Models;

use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    use Resizable;
    protected $table = 'votes';
    protected $primaryKey = 'id';
}
