<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resume extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'resumes';

    protected $fillable = [
        'title',
        'link',
        'user_id',
        'comment',
    ];
}
