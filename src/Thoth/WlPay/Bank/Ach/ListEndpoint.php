<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user's ACH accounts.
 */
class ListEndpoint
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user's ACH accounts.
     *
     * Validates the user, business, and location, then retrieves all saved ACH accounts for the resolved merchant.
     *  Also reports whether the current owner is allowed to add a new ACH account.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Thoth/WlPay/Bank/Ach/List.json', $request->params(), 'GET'));
    }
}
