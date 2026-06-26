<?php

namespace WlSdk\Wl\Business\AuthorizeSupport;

use WlSdk\WlSdkClient;

/**
 * Logs current user into business backend.
 */
class AuthorizeSupportEnter
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Logs current user into business backend.
     *
     * @return AuthorizeSupportEnterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AuthorizeSupportEnterGetRequest $request): AuthorizeSupportEnterGetResponse
    {
        return new AuthorizeSupportEnterGetResponse($this->client->request('/Wl/Business/AuthorizeSupport/AuthorizeSupportEnter.json', $request->params(), 'GET'));
    }
}
