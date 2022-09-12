<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Carbon;

class TopicEvaluation extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'topic_evaluation';
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function evaluation() {
        return $this->hasMany(Evaluation::class, 'topic_id');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

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
                $query->where('description', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
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
