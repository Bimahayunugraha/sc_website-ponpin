<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keluhan extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $table = 'keluhan';
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status() {
        return $this->belongsTo(Tanggapan::class, 'status_id','status');
    }

    public function details() {
        return $this->hasMany(Keluhan::class, 'id', 'id');
    }

    public function tanggapans() {
        return $this->belongsTo(Keluhan::class, 'id', 'id');
    }    
    

    public function tanggapan() {
        return $this->hasOne(Tanggapan::class);
    }

    public function scopeFilter($query, array $filters) {
        $query->when ($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) => 
                $query->where('username', $user)
            )
        );
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
