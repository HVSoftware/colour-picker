<?php
declare(strict_types=1);

namespace HVSoftware\ColourPicker;

final class ColourPicker implements ColourPickerInterface
{
    public function getRGBByColour(string $name): array
    {
        return [255,0,0];
    }
}
