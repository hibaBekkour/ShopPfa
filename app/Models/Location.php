<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, User::class);
    }

    public function payments()
    {
        return $this->hasManyThrough(Payment::class, User::class);
    }
}
