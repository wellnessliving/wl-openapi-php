<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Widget;

use WlSdk\WlSdkClient;

/**
 * Gets a list of saved bank account.
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
     * Gets a list of saved bank account.
     *
     * @return WidgetSelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetSelectGetRequest $request): WidgetSelectGetResponse
    {
        return new WidgetSelectGetResponse($this->client->request('/Thoth/WlPay/Bank/Ach/Widget/WidgetSelect.json', $request->params(), 'GET'));
    }
}
