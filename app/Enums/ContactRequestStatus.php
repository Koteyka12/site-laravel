<?php

declare(strict_types=1);

namespace App\Enums;

enum ContactRequestStatus: string
{
    case Neu = 'neu';
    case InBearbeitung = 'in_bearbeitung';
    case Wiedervorlage = 'wiedervorlage';
    case Termin = 'termin';
    case Abgeschlossen = 'abgeschlossen';
    case Verloren = 'verloren';
    case Reklamation = 'reklamation';

    public function label(): string
    {
        return match ($this) {
            self::Neu => 'Neu',
            self::InBearbeitung => 'In Bearbeitung',
            self::Wiedervorlage => 'Wiedervorlage',
            self::Termin => 'Termin',
            self::Abgeschlossen => 'Abgeschlossen',
            self::Verloren => 'Verloren',
            self::Reklamation => 'Reklamation',
        };
    }

    /**
     * @return array<string, string>
     */
    public static function options(): array
    {
        $options = [];

        foreach (self::cases() as $status) {
            $options[$status->value] = $status->label();
        }

        return $options;
    }
}
