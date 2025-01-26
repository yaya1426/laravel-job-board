<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    use HasUuids;
    
    // Primary Key
    protected $primaryKey = 'id';
    protected $keyType = 'string'; //UUID - Universal Unique Identifier
    public $incrementing = false;

    protected $table = 'post';
 
    protected $fillable = ['title', 'body', 'author', 'published', 'user_id']; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (readonly)

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
