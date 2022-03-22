<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Subjects extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'class_id',
        'name',
        'description'
    ];
}