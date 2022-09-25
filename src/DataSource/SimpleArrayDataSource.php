<?php

namespace Lynxie\Sitemap\DataSource;

use Lynxie\Sitemap\DTO\SitemapItem;

class SimpleArrayDataSource
{

    private array $sitemapItems;

    /**
     * @param array|SitemapItem[] $sitemapItems
     */
    public function __construct(array $sitemapItems)
    {
        $this->setSitemapItems($sitemapItems);
    }

    public function getItemGenerator(): \Generator
    {

    }

    private function setSitemapItems(array $sitemapItems): void
    {
        foreach ($sitemapItems as $sitemapItem) {
            if (!$sitemapItem instanceof SitemapItem) {
                throw new \Exception(sprintf('Expected array of %s', SitemapItem::class));
            }
        }

        $this->sitemapItems = $sitemapItems;
    }

}
