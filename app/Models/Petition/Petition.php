<?php
namespace App\Models\Petition;

use App\Models\Analytic\Impression;
use App\Models\Comment\Comment;
use App\Models\Traits\Uuids;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Petition extends Model
{
    use Uuids, HasSlug;

    protected $table = 'petitions';

    protected $fillable = [
        'uuid', 'title', 'slug', 'description', 'creator_id', 'ends_at'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function votes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'petition_user_votes')
            ->withTimestamps();
    }

    public function impressions(): MorphMany
    {
        return $this->morphMany(Impression::class, 'assignable');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'assignable');
    }
}
