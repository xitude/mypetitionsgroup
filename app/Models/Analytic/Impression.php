<?php
namespace App\Models\Analytic;

use App\Models\Traits\Uuids;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Impression extends Model
{
    protected $table = 'impressions';

    protected $fillable = [
        'assignable_id', 'assignable_type', 'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
