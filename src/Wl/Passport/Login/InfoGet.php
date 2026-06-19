<?php
namespace WlSdk\Wl\Passport\Login;

use WlSdk\WlSdkClient;

/**
 * Returns the current user's login information and password reset URL for the specified business.
 */
class InfoGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the current user's login information and password reset URL for the specified business.
     *
     * Validates the business key, applies any business-specific redemption settings, then delegates to the parent
     * implementation to return the current user ID and password reset URL.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Wl/Passport/Login/Info.json', $request->params(), 'GET'));
    }
}
