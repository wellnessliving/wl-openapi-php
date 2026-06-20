<?php

namespace WlSdk\Wl\Skin\Application\Connect;

use WlSdk\WlSdkClient;

/**
 * Creates or updates the integration credentials for the given business application.
 */
class ApplicationConnect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates or updates the integration credentials for the given business application.
     *
     * If a record already exists for `k_business`, it is updated
     * in place. Otherwise, a new record is created and linked to the business.
     *
     * @return ApplicationConnectPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplicationConnectPostRequest $request): ApplicationConnectPostResponse
    {
        return new ApplicationConnectPostResponse($this->client->request('/Wl/Skin/Application/Connect/ApplicationConnect.json', $request->params(), 'POST'));
    }
}
