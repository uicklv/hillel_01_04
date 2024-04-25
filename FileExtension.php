<?php

enum FileExtension: string
{
    case TXT = 'txt';
    case DOC = 'doc';

    public static function values(): array
    {
        $values = [];
        foreach (self::cases() as $case) {
            $values[] = $case->value;
        }

        return $values;
    }
}