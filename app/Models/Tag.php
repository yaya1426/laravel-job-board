<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use HasUuids;

    // Primary Key
    protected $primaryKey = 'id';
    protected $keyType = 'string'; //UUID - Universal Unique Identifier
    public $incrementing = false;

    protected $table = 'tag';
    //use HasFactory;
    protected $fillable = ['title']; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (readonly)

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
