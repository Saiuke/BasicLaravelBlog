<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        $this->comments()->create([
            'body' => $body,
            'user_id' => auth()->id()
        ]);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters){
        
        if ($month = @$filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = @$filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives(){
        return static::selectRaw('YEAR(created_at) as Year, MONTHNAME(created_at) as Month, COUNT(*) Published')
        ->groupBy('Year', 'Month')
        ->orderByRaw('min(created_at)')
        ->get()
        ->toArray();
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}