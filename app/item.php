<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Event;
class Item extends Model
{
    protected $fillable = ['name', 'price'];
    public static function boot() {
	    parent::boot();
	    static::created(function($item) {
	        Event::fire('item.created', $item);
	    });
	    static::updated(function($item) {
	        Event::fire('item.updated', $item);
	    });
	    static::deleted(function($item) {
	        Event::fire('item.deleted', $item);
	    });
	}
}