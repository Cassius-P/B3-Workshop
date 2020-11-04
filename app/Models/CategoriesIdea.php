<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesIdea extends Model
{
    use Resizable;
    protected $table = 'categories_idea';
    protected $primaryKey = 'id';

}
