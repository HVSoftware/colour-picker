<?php
declare(strict_types=1);

namespace HVSoftware\ColourPicker\Config\Loader;

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Yaml\Yaml;

final class YamlColourLoader extends FileLoader
{
    /**
     * @inheritDoc
     */
    public function load($resource, string $type = null)
    {
        $configValues = Yaml::parse(file_get_contents($resource));
    }

    /**
     * @inheritDoc
     */
    public function supports($resource, string $type = null)
    {
        return is_string($resource) && 'yaml' === pathinfo(
            $resource,
            PATHINFO_EXTENSION
        );
    }
}
