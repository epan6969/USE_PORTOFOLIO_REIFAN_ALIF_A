<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'project_title', 'project_type', 'client_name', 'role',
        'start_date', 'end_date', 'is_ongoing', 'description',
        'technologies', 'project_url', 'github_url', 'thumbnail',
    ];

    protected function casts(): array
    {
        return [
            'start_date'   => 'date',
            'end_date'     => 'date',
            'is_ongoing'   => 'boolean',
            'technologies' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}