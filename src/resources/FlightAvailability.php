<?php

/**
 * @noinspection PhpPropertyOnlyWrittenInspection
 * @noinspection PhpUnused
 */

declare(strict_types=1);

namespace Amadeus\Resources;

use JsonMapper;
use JsonMapper_Exception;

class FlightAvailability
{
    private string $type;
    private string $id;
    private string $originDestinationId;
    private string $source;
    private bool $instantTicketRequired;
    private bool $paymentCardRequired;
    private string $duration;
    private array $segments;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getOriginDestinationId(): string
    {
        return $this->originDestinationId;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return bool
     */
    public function isInstantTicketRequired(): bool
    {
        return $this->instantTicketRequired;
    }

    /**
     * @return bool
     */
    public function isPaymentCardRequired(): bool
    {
        return $this->paymentCardRequired;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @return ExtendedSegment[]
     * @throws JsonMapper_Exception
     */
    public function getSegments(): iterable
    {
        $mapper = new JsonMapper();
        $mapper->bIgnoreVisibility = true;

        return $mapper->mapArray(
            $this->segments, array(), ExtendedSegment::class
        );
    }

}
