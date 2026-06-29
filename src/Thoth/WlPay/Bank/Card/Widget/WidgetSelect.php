<?php

namespace WlSdk\Thoth\WlPay\Bank\Card\Widget;

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
     * @return WidgetSelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetSelectGetRequest $request): WidgetSelectGetResponse
    {
        return new WidgetSelectGetResponse($this->client->request('/Thoth/WlPay/Bank/Card/Widget/WidgetSelect.json', $request->params(), 'GET'));
    }
}
