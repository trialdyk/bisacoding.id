<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubMaterial extends Model
{
    use HasFactory;

    /**
     * Get the material that owns the SubMaterial
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class);
    }

    /**
     * Get all of the subMaterialContents for the SubMaterial
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMaterialContents(): HasMany
    {
        return $this->hasMany(SubMaterialContent::class);
    }   
}
