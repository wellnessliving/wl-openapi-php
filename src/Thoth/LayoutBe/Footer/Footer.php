<?php

namespace WlSdk\Thoth\LayoutBe\Footer;

use WlSdk\WlSdkClient;

/**
 * Loads the data required to render the site footer for the given business.
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
     * Loads the data required to render the site footer for the given business.
     *
     * Loads the business's white-label status and derives whether the "Powered by WellnessLiving"
     * branding and the Terms and Conditions link should be shown in the footer. The result is stored in
     * {@link \WlSdk\Thoth\LayoutBe\Footer\FooterGetResponse::$show_term}.
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
