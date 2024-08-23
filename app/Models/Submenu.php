<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Submenu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'uuid', 'menu_id'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function subsubmenus()
    {
        return $this->hasMany(Subsubmenu::class);
    }
}

