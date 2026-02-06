<?php

namespace App\Models;

use App\Enums\ContactRequestStatus;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'status',
        'message',
        'handled_at',
        'sorting',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'handled_at' => 'datetime',
        'sorting' => 'integer',
    ];

    protected static function booted(): void
    {
        static::saving(function (ContactRequest $contactRequest): void {
            if ($contactRequest->status === ContactRequestStatus::Abgeschlossen->value && $contactRequest->handled_at === null) {
                $contactRequest->handled_at = now();
            }
        });
    }
}
