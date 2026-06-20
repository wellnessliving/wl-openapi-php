<?php

namespace WlSdk\Wl\Login\Type;

use WlSdk\WlSdkClient;

/**
 * Gets a login types list of a business.
 */
class LoginType
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a login types list of a business.
     *
     * Returns all client types configured for the specified business, each with its key, title, client type ID,
     * and
     * a deprecated membership flag. If `is_franchisor` is `true`, returns the combined login types of all
     * franchisees
     * under the franchisor business.
     *
     * @return LoginTypeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LoginTypeGetRequest $request): LoginTypeGetResponse
    {
        return new LoginTypeGetResponse($this->client->request('/Wl/Login/Type/LoginType.json', $request->params(), 'GET'));
    }
}
