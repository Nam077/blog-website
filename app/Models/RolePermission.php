<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RolePermission extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'id_role');
    }
    public function permission(): BelongsTo
    {
        return $this->belongsTo(Permission::class, 'id_permission');
    }
}
