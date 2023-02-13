<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'price',
        'date',
        'comment',
        'link',
        'type',
    ];
}
