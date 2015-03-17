<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Cms\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for cms block search results.
 */
interface BlockSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get blocks list.
     *
     * @return \Magento\Cms\Api\Data\PageInterface[]
     */
    public function getItems();

    /**
     * Set blocks list.
     *
     * @param \Magento\Cms\Api\Data\BlockInterface[] $items
     * @return $this
     */
    public function setItems(array $items = null);
}
