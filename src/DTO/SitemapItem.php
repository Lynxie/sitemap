<?php

namespace Lynxie\Sitemap\DTO;

use DateTimeImmutable;

class SitemapItem
{

    private string $loc;
    private ?DateTimeImmutable $lastMod;
    private ?float $priory;

    public function __construct(
        string             $loc,
        ?DateTimeImmutable $lastMod,
        ?float             $priory

    )
    {
        $this->loc = $loc;
        $this->lastMod = $lastMod;
        $this->priory = $priory;
    }

    /**
     * @return string
     */
    public function getLoc(): string
    {
        return $this->loc;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getLastMod(): ?DateTimeImmutable
    {
        return $this->lastMod;
    }

    /**
     * @return float|null
     */
    public function getPriory(): ?float
    {
        return $this->priory;
    }

}
