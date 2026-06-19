<?php
namespace WlSdk\Wl\Purchase\Receipt;

use WlSdk\WlSdkClient;

/**
 * Gets purchase information.
 */
class PurchaseReceiptApi
{
    /**
     * Whether `url_print` and `url_print_receipt` require authentication.
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets purchase information.
     *
     * Returns full receipt data for the specified purchase, including business details, customer information,
     * itemized purchase items, payment methods, pricing summary, and print URLs.
     *
     * @return PurchaseReceiptApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PurchaseReceiptApiGetResponse
    {
        return new PurchaseReceiptApiGetResponse($this->client->request('/Wl/Purchase/Receipt/PurchaseReceipt.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_url_public' => $this->is_url_public,
            'k_purchase' => $this->k_purchase,
            ],
            static fn($v) => $v !== null
        );
    }
}
