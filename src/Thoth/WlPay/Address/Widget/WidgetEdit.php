<?php

namespace WlSdk\Thoth\WlPay\Address\Widget;

use WlSdk\WlSdkClient;

/**
 * Gets data for "edit payment address" widget.
 */
class WidgetEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data for "edit payment address" widget.
     *
     * @return WidgetEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetEditGetRequest $request): WidgetEditGetResponse
    {
        return new WidgetEditGetResponse($this->client->request('/Thoth/WlPay/Address/Widget/WidgetEdit.json', $request->params(), 'GET'));
    }
}
