<?php
namespace WlSdk\Wl\Passport\Login;

use WlSdk\WlSdkClient;

/**
 * Returns the current user's login information and password reset URL for the specified business.
 */
class InfoApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return InfoApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): InfoApiGetResponse
    {
        return new InfoApiGetResponse($this->client->request('/Wl/Passport/Login/Info.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
