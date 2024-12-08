<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    use HasUuids;

    // Primary Key
    protected $primaryKey = 'id';
    protected $keyType = 'string'; //UUID - Universal Unique Identifier
    public $incrementing = false;

    protected $table = 'comment';
    protected $fillable = ['author', 'content', 'post_id'];
    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
