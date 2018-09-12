<?php

namespace FondOfSpryker\Client\Cart\Plugin;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Client\Cart\Plugin\ItemCountPlugin as SprykerItemCountPlugin;

class ItemCountPlugin extends SprykerItemCountPlugin
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return int
     */
    public function getItemCount(QuoteTransfer $quoteTransfer)
    {
        $quantity = 0;

        /** @var \Generated\Shared\Transfer\ItemTransfer $item */
        foreach ($quoteTransfer->getItems() as $item) {
            $quantity += $item->getQuantity();
        }

        return $quantity;
    }
}
