<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use HasFactory, SoftDeletes;

        protected $table = 'chapters';

        /**
        * The attributes that are mass assignable.
        *
        * @var array
        */
        protected $fillable = [
        'name',
        'description',
        'logo_path',
        'logo_thin_path'
        ];

        public function user()
        {
            return $this->hasOne(User::class);
        }

        public function episode()
        {
            return $this->hasMany(Episode::class);
        }

}