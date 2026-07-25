<?php

namespace WlSdk\Wl\Pay\Owner;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment owner.
 */
class Owner
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about payment owner.
     *
     * Must be called before initiating any payment on behalf of a user, to determine the correct payment
     * owner keys to pass to the payment form. Also indicates whether a family-account relationship exists
     * (for example, a parent paying for a child), which affects how the payment form is pre-populated.
     *
     * @return OwnerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OwnerGetRequest $request): OwnerGetResponse
    {
        return new OwnerGetResponse($this->client->request('/Wl/Pay/Owner/Owner.json', $request->params(), 'GET'));
    }
}
