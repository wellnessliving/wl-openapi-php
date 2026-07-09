<?php

namespace WlSdk\Wl\Pay\Bank\Card;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user's bank cards.
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
     * Retrieves information about user's bank cards.
     *
     * Returns the list of saved payment cards for the specified user and business, including card number fragment,
     * expiry date, card system, holder name, and default status. Also returns whether new cards can be added.
     *
     * @return ListEndpointGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListEndpointGetRequest $request): ListEndpointGetResponse
    {
        return new ListEndpointGetResponse($this->client->request('/Wl/Pay/Bank/Card/List.json', $request->params(), 'GET'));
    }
}
