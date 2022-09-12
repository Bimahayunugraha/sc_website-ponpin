<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';
    protected $guarded = ['id'];
    protected $with = ['user'];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function users() {
        return $this->hasMany(User::class);
    }

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    public function getStartDateAttribute() {
        return Carbon::parse($this->attributes['start_date'])->translatedFormat('l, d F Y');
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%');
        });

        $query->when($filters['candidate'] ?? false, fn($query, $candidate) =>
            $query->whereHas('candidate', fn($query) => 
                $query->where('name', $candidate)
            )
        );
    }
}
