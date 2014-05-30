<?php

namespace Heystack\Availability\SilverStripe;

/**
 * @package Heystack\Availability\SilverStripe
 */
class SaleAvailabilityExtension extends \DataExtension
{
    /**
     * @var array
     */
    private static $many_many = array(
        'SaleAvailabilityZones' => 'Heystack\Zoning\Zone'
    );
} 