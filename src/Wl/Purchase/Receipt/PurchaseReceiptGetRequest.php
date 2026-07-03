<?php

namespace WlSdk\Wl\Purchase\Receipt;

class PurchaseReceiptGetRequest
{
    /**
     * Whether [PurchaseReceiptApi](/Wl/Purchase/Receipt/PurchaseReceipt.json) and
     * [PurchaseReceiptApi](/Wl/Purchase/Receipt/PurchaseReceipt.json) require authentication.
     *
     * If `true`, the URL contains a token that allows temporary access to the page without logging in. If 'false',
     * the
     * page requires authentication.
     *
     * @var bool|null
     */
    public ?bool $is_url_public = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_url_public' => $this->is_url_public,
            'k_purchase' => $this->k_purchase,
            ],
            static fn ($v) => $v !== null
        );
    }
}
