<?php

namespace ItBlaster\FixturesBundle\DataFixtures\Dumper;

use Symfony\Component\Yaml\Yaml;

/**
 * YAML fixtures dumper.
 *
 * @author William Durand <william.durand1@gmail.com>
 */
class YamlDataDumper extends AbstractDataDumper
{
    /**
     * {@inheritdoc}
     */
    protected function transformArrayToData($data)
    {
        return Yaml::dump(
            $data,
            $inline = 3,
            $indent = 4,
            $exceptionOnInvalidType = false,
            $objectSupport = true
        );
    }
}
