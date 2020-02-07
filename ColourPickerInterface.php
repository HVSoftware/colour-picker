<?php
declare(strict_types=1);

namespace HVSoftware\ColourPicker;

interface ColourPickerInterface
{
    public function getRGBByColour(string $name): array;
}
