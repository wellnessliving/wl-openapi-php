<?php

namespace WlSdk\Wl\Pay\Address\Widget;

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
     * Returns the list of geographic regions and phone number format masks configured for the given business
     * locale.
     *  When no business key is provided, system-level defaults are returned.
     *
     * @return WidgetEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetEditGetRequest $request): WidgetEditGetResponse
    {
        return new WidgetEditGetResponse($this->client->request('/Wl/Pay/Address/Widget/WidgetEdit.json', $request->params(), 'GET'));
    }
}
