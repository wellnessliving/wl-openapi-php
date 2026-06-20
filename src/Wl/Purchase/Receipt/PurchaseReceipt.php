<?php
namespace WlSdk\Wl\Purchase\Receipt;

use WlSdk\WlSdkClient;

/**
 * Gets purchase information.
 */
class PurchaseReceipt
{
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
     * @return PurchaseReceiptGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PurchaseReceiptGetRequest $request): PurchaseReceiptGetResponse
    {
        return new PurchaseReceiptGetResponse($this->client->request('/Wl/Purchase/Receipt/PurchaseReceipt.json', $request->params(), 'GET'));
    }
}
