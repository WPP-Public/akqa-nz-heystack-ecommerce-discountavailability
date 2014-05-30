<?php

namespace Heystack\Availability\SilverStripe;

use Heystack\Core\Exception\ConfigurationException;
use Heystack\Ecommerce\Locale\Interfaces\ZoneServiceInterface;
use Heystack\Ecommerce\Locale\Traits\HasZoneServiceTrait;

/**
 * @package Heystack\Availability\SilverStripe
 */
trait SaleAvailabilityTrait
{
    /**
     * @return bool
     * @throws \Heystack\Core\Exception\ConfigurationException
     */
    public function isSaleAvailable()
    {
        if (!$this instanceof \DataObject) {
            throw new ConfigurationException(
                sprintf(
                    "'%s' is not an instance of DataObject",
                    __CLASS__
                )
            );
        }

        if (!$this->zoneService instanceof ZoneServiceInterface) {
            throw new ConfigurationException(
                sprintf(
                    "%s::isSaleAvailable expected to have a zone service but not was set on trait",
                    __CLASS__
                )
            );
        }

        return array_key_exists(
            $this->zoneService->getActiveZone()->getName(),
            $this->SaleAvailabilityZones()->column('Name')
        );
    }

    /**
     * @return \Heystack\Ecommerce\Locale\Interfaces\ZoneServiceInterface
     */
    abstract function getZoneService();
}