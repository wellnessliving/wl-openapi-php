<?php

namespace WlSdk\Wl\Pay\Bank\Card\Widget;

use WlSdk\WlSdkClient;

/**
 * Gets a list of saved bank cards.
 */
class WidgetSelect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of saved bank cards.
     *
     * Validates the payment method, currency, business, location, and pay owner type, then loads the configured
     *  merchant and returns the list of saved cards available to the given owner. For business owners, a
     * system-wide
     *  merchant must be configured; for users, a business-specific merchant is required.
     *
     * @return WidgetSelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetSelectGetRequest $request): WidgetSelectGetResponse
    {
        return new WidgetSelectGetResponse($this->client->request('/Wl/Pay/Bank/Card/Widget/WidgetSelect.json', $request->params(), 'GET'));
    }
}
