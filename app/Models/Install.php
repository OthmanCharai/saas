<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Install extends Model
{
    use HasFactory;

    /**
     * Get the Site that owns the Install.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }

    /**
     * Get the contact associated with the Install.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Contact(): HasOne
    {
        return $this->hasOne(Contact::class);
    }
}