<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanComment extends Model
{
    use HasFactory;

    protected $table = 'pengaduan_comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comment',
        'pengaduan_id',
        'user_id',
        'file',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
