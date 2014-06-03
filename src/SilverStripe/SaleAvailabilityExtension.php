<?php

namespace Heystack\Availability\SilverStripe;

/**
 * @package Heystack\Availability\SilverStripe
 */
class SaleAvailabilityExtension extends \DataExtension
{
    /**
     * @param $class
     * @param $extension
     * @param $args
     * @return array
     */
    public static function get_extra_config($class, $extension, $args)
    {
        return [
            'many_many' => [
                'SaleAvailabilityZones' => 'Heystack\\DB\\Zone'
            ]
        ];
    }
} 