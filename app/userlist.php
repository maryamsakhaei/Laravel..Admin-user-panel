<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class userlist extends Model
{
    use Notifiable;
    protected $table='userlist';
    public $timestamps = false;

    protected $fillable = [
    'name','email', 'password','mobile','photo','bann'
    ];
}
