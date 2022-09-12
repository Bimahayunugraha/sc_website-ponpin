<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';
    protected $guarded = ['id'];
    protected $with = ['user'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function forum() {
        return $this->belongsTo(Forum::class);
    }

    public function childs() {
        return $this->hasMany(Komentar::class, 'parent');
    }
}
