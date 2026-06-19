<?php
namespace WlSdk\Wl\User\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about the user belongs to certain integrations.
 */
class UserIntegrationApi
{
    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about the user belongs to certain integrations.
     *
     * Returns which third-party booking integrations (Classpass, Gympass, Reserve With Google)
     * the user is currently connected to within the given business context. Returns `null`
     * when the user has no active integration memberships.
     *
     * @return UserIntegrationApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): UserIntegrationApiGetResponse
    {
        return new UserIntegrationApiGetResponse($this->client->request('/Wl/User/Info/UserIntegration.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
