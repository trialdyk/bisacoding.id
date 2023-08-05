<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    /**
     * Get the category that owns the Material
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(BelongsTo::class);
    }


    /**
     * Get all of the subMaterials for the Material
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMaterials(): HasMany
    {
        return $this->hasMany(SubMaterial::class);
    }
}
