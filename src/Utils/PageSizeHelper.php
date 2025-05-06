<?php

namespace Wovosoft\LaravelDocumentGenerator\Utils;

class PageSizeHelper
{
    /**
     * Common page sizes in portrait orientation (width x height in mm).
     */
    public const array SIZES_MM = [
        'A4' => [210, 297],
        'A3' => [297, 420],
        'A5' => [148, 210],
        'Letter' => [216, 279],
        'Legal' => [216, 356],
    ];

    /**
     * Returns the width of the page in the given unit.
     *
     * @param  string  $orientation  'portrait' or 'landscape'
     * @param  string  $unit  'mm'|'pt'|'in'
     */
    public static function getPageWidth(string $size = 'A4', string $orientation = 'portrait', string $unit = 'mm', int $dpi = 96): float
    {
        $size = ucfirst(strtolower($size));
        $orientation = strtolower($orientation);

        if (! isset(self::SIZES_MM[$size])) {
            throw new \InvalidArgumentException("Unsupported page size: $size");
        }

        [$width, $height] = self::SIZES_MM[$size];

        if ($orientation === 'landscape') {
            [$width, $height] = [$height, $width];
        }

        return match ($unit) {
            'mm' => $width,
            'pt' => $width * 2.83465,
            'in' => $width / 25.4,
            'px' => ($width / 25.4) * $dpi,
            default => throw new \InvalidArgumentException("Unsupported unit: $unit"),
        };
    }
}
