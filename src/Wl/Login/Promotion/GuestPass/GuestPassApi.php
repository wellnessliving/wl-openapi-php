<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves guest pass information for a client's membership.
 */
class GuestPassApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Number of guest passes remaining for the current period.
     *
     * @var int|null
     */
    public ?int $i_adjust = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves guest pass information for a client's membership.
     *
     * Returns the guest pass configuration and remaining usage count for the specified login promotion.
     *
     * @return GuestPassApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): GuestPassApiGetResponse
    {
        return new GuestPassApiGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/GuestPass.json', $this->params(), 'GET'));
    }

    /**
     * Updates the guest pass remaining usages for a client's membership.
     *
     * Adjusts the remaining guest pass count to the specified value and logs the change. Requires
     *  staff-level edit access for the login promotion.
     *
     * @return GuestPassApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): GuestPassApiPutResponse
    {
        return new GuestPassApiPutResponse($this->client->request('/Wl/Login/Promotion/GuestPass/GuestPass.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'i_adjust' => $this->i_adjust,
            ],
            static fn($v) => $v !== null
        );
    }
}
