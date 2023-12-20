<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    protected $fillable=['user_id','taskName','taskDescription','taskDate','category_id'];

    public function setTaskDateAttribute($value)
    {
        $this->attributes['taskDate'] = date('Y-m-d', strtotime($value));
    }
    public function getTaskDateAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }
    public function registration()
    {
        return $this->belongsTo(Registration::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
