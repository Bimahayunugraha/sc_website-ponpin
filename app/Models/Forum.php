<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Forum extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'diskusi';
    protected $guarded = ['id'];
    protected $with = ['user'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function komentar() {
        return $this->hasMany(Komentar::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function scopeFilter($query, array $filters) {
        $query->when ($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) => 
                $query->where('username', $user)
            )
        );
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
