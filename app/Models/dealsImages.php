<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\deals;
class dealsImages extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function dela()
    {
        return $this->belongsTo(delas::class);
    }
}
