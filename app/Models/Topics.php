<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Topics extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject_id',
        'name',
        'type',
        'content'
    ];
}