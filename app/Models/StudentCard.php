<?php

namespace App\Models;

use App\Models\User;
use App\Enum\SchoolEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentCard extends Model
{
    use HasFactory;

    protected $casts=[
        'school'=>SchoolEnum::class,
        'is_internal' => 'boolean',
        'date_of_birth' => 'date',

    ];

    /** 
     * @return BelongsTo<User,StudentCard> 
     */

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
