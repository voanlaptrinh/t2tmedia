<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $table = 'blocks';
    protected $fillable = [
        'block',
        'block_title',
        'title',
        'title1','title2','title3','title4','title5'
    ];
}
