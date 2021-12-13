<?php
namespace App\Models\Comment;

use App\Models\Traits\Uuids;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use Uuids;

    protected $table = 'comments';

    protected $fillable = [
        'uuid', 'assignable_id', 'assignable_type', 'user_id', 'comment'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
