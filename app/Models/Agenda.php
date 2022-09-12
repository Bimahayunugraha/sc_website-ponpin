<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Carbon;

class Agenda extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'agenda';
    protected $guarded = ['id'];

    public function getCreatedAtAttribute() {
        return Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }

    public function getStartDateAttribute() {
        return Carbon::parse($this->attributes['start_date'])->translatedFormat('Y-m-d\TH:i');
    }

    public function getEndDateAttribute() {
        return Carbon::parse($this->attributes['end_date'])->translatedFormat('Y-m-d\TH:i');
    }

    public function scopeFilter($query, array $filters) {
        $query->when ($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
            });
        });
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
