<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class bank extends Model
{
    use Notifiable;
    protected $table='bank';
    public $timestamps = false;

    protected $fillable = [
    'owner','cart_number','cvv','expaire_month','expaire_year','value'
    ];
}
