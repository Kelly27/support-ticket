<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
    'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
    ]; //This tells Laravel that the columns specified can be mass assigned. We also need to do this with our Category model.

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
{
    return $this->hasMany(Comment::class);
}
}
