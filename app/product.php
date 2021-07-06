<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class product extends Model
{
    use Notifiable;
    protected $table='product';
    public $timestamps = false;

    protected $fillable = [
    'name','price', 'description','photo','tag','categories','categoriesname'
    ];
}
