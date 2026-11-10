<?php

namespace WlSdk\Wl\Profile\Overview\QuickContact;

use WlSdk\WlSdkClient;

/**
 * Returns notification availability flags for the specified client.
 */
class QuickContactOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns notification availability flags for the specified client.
     *
     * Checks whether the Welcome email, Password Reset email and Brivo mobile pass invitation
     * actions are available for the client identified by {@link
     * \WlSdk\Wl\Profile\Overview\QuickContact\QuickContactOption}
     * and {@link \WlSdk\Wl\Profile\Overview\QuickContact\QuickContactOption}.
     *
     * @return QuickContactOptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuickContactOptionGetRequest $request): QuickContactOptionGetResponse
    {
        return new QuickContactOptionGetResponse($this->client->request('/Wl/Profile/Overview/QuickContact/QuickContactOption.json', $request->params(), 'GET'));
    }
}
