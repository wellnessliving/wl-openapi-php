<?php

namespace WlSdk\Wl\Integration\Autymate;

use WlSdk\WlSdkClient;

/**
 * Constructs the URL to add to the iframe to allow the user to access Autymate's platform.
 */
class AutymateUrlIframe
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Constructs the URL to add to the iframe to allow the user to access Autymate's platform.
     *
     * @return AutymateUrlIframeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutymateUrlIframeGetRequest $request): AutymateUrlIframeGetResponse
    {
        return new AutymateUrlIframeGetResponse($this->client->request('/Wl/Integration/Autymate/AutymateUrlIframe.json', $request->params(), 'GET'));
    }
}
