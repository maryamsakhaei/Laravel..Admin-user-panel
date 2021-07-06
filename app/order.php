<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class order extends Model
{
    use Notifiable;
    protected $table='orders';
    public $timestamps = false;

    protected $fillable = [
    'email','track_number', 'product_id', 'total_price','state','name'
    ];
}
