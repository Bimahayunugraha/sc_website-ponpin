<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $guarded = ['id'];
    protected $with = ['keluhans'];

    public function keluhans() {
        return $this->belongsTo(Keluhan::class, 'keluhan_id');
    }

    public function keluhan() {
        return $this->hasOne(Keluhan::class);
    }

    public function proses() {
    return $this->hasMany(Keluhan::class, 'status_id','status');
    }

    // public function country() {
    //     return $this->hasOne(Keluhan::class);
    // }
}
