<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeleting;
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date=['deleted_at'];

    protected $fillable=[
//mass data insertion 
        'title',
        'body1'

    ];
}
