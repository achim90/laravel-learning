<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //        return $this->belongsTo(у этой модели только одна category)
//          (category::class(модель с которой я хочу свезать текущую модель(обстрагируемся от таблиц)
//,         'category_id'(взята с модели post и вней хранится id модели category),
//          'id'( id category));


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'posttags', 'post_id', 'tag_id');
    }
}

