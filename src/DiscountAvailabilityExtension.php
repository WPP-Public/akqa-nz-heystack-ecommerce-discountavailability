<?php

namespace Heystack\Availability;

use DataExtension;

/**
 * @package Heystack\Availability
 */
class DiscountAvailabilityExtension extends DataExtension
{
    /**
     * @param string $class
     * @param string $extension
     * @param array $args
     * @return array
     */
    public static function get_extra_config($class, $extension, $args)
    {
        return [
            'many_many' => [
                'DiscountAvailabilityZones' => 'Heystack\\DB\\Zone'
            ]
        ];
    }
}