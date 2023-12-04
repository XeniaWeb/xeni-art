<?php

declare(strict_types=1);

namespace App\Enums;

enum RoleName: string
{
    case ADMIN = 'admin';
    case EDITOR = 'editor';
    case CUSTOMER = 'customer';
}
