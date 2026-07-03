<?php

namespace WlSdk\Core\Spa\Application;

use WlSdk\WlSdkClient;

/**
 * Gets information of application.
 */
class SpaApplication
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information of application.
     *
     * Returns which sign-in methods (Apple, Facebook, Google, Microsoft, TJX) are enabled for the
     * application, along with the social sign-in and registration restrictions and the
     * corresponding authorization links.
     *
     * @return SpaApplicationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SpaApplicationGetRequest $request): SpaApplicationGetResponse
    {
        return new SpaApplicationGetResponse($this->client->request('/Core/Spa/Application/SpaApplication.json', $request->params(), 'GET'));
    }
}
