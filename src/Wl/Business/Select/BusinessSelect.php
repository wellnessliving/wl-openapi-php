<?php

namespace WlSdk\Wl\Business\Select;

use WlSdk\WlSdkClient;

/**
 * Performs checks and generates a list of businesses according to a given configuration.
 */
class BusinessSelect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs checks and generates a list of businesses according to a given configuration.
     *
     * Populates the business-select dropdown widget shown in the backend. Used wherever staff need to
     * switch between businesses they have access to. The returned structure drives the widget directly
     * and includes selection state, visibility flags, and display configuration.
     *
     * @return BusinessSelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessSelectGetRequest $request): BusinessSelectGetResponse
    {
        return new BusinessSelectGetResponse($this->client->request('/Wl/Business/Select/BusinessSelect.json', $request->params(), 'GET'));
    }
}
