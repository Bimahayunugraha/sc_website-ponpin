<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];
    protected $with = ['candidate', 'topic'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function keluhans() {
        return $this->hasMany(Keluhan::class);
    }

    public function forum() {
        return $this->hasMany(Forum::class);
    }

    public function komentar() {
        return $this->hasMany(Komentar::class);
    }

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }

    public function topic() {
        return $this->belongsTo(TopicEvaluation::class, 'topic_id');
    }

    public function scopeFilter($query, array $filters) {
        $query->when ($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('username', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%');
        });
    }
}
