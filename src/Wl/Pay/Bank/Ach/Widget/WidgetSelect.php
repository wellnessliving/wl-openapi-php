<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Widget;

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
     * Validates the input parameters, resolves the payment owner and business merchant, checks access,
     * and returns the list of bank accounts available for selection in the bank account widget.
     *
     * @return WidgetSelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetSelectGetRequest $request): WidgetSelectGetResponse
    {
        return new WidgetSelectGetResponse($this->client->request('/Wl/Pay/Bank/Ach/Widget/WidgetSelect.json', $request->params(), 'GET'));
    }
}
