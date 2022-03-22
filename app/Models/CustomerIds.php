<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class CustomerIds extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'customer_id'
    ];
}