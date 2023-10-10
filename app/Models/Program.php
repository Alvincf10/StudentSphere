<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;


    public function organizer()
    {
        return $this->belongsTo(Organizer::class, 'id_organizer');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'id_location');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
