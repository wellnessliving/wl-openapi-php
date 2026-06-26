<?php

namespace WlSdk\Wl\Business\Account\Application;

use WlSdk\WlSdkClient;

/**
 * Upgrades current application account to specified account.
 */
class Application
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Upgrades current application account to specified account.
     *
     * @return ApplicationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplicationPostRequest $request): ApplicationPostResponse
    {
        return new ApplicationPostResponse($this->client->request('/Wl/Business/Account/Application/Application.json', $request->params(), 'POST'));
    }
}
