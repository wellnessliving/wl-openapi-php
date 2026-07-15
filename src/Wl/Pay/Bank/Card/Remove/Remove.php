<?php

namespace WlSdk\Wl\Pay\Bank\Card\Remove;

use WlSdk\WlSdkClient;

/**
 * Removes the card.
 */
class Remove
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes the card.
     *
     * @return RemoveDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(RemoveDeleteRequest $request): RemoveDeleteResponse
    {
        return new RemoveDeleteResponse($this->client->request('/Wl/Pay/Bank/Card/Remove/Remove.json', $request->params(), 'DELETE'));
    }
}
