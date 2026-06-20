<?php

namespace WlSdk\Wl\User\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about the user belongs to certain integrations.
 */
class UserIntegration
{
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
     * @return UserIntegrationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserIntegrationGetRequest $request): UserIntegrationGetResponse
    {
        return new UserIntegrationGetResponse($this->client->request('/Wl/User/Info/UserIntegration.json', $request->params(), 'GET'));
    }
}
