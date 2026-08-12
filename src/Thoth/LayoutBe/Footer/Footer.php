<?php

namespace WlSdk\Thoth\LayoutBe\Footer;

use WlSdk\WlSdkClient;

/**
 * Returns the data required to render the site footer for the given business.
 */
class Footer
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the data required to render the site footer for the given business.
     *
     * @return FooterGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FooterGetRequest $request): FooterGetResponse
    {
        return new FooterGetResponse($this->client->request('/Thoth/LayoutBe/Footer/Footer.json', $request->params(), 'GET'));
    }
}
