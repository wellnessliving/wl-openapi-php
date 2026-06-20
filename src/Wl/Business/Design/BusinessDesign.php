<?php
namespace WlSdk\Wl\Business\Design;

use WlSdk\WlSdkClient;

/**
 * API method to get business design data.
 */
class BusinessDesign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * API method to get business design data.
     *
     * Used to render the client-facing schedule and booking widget with the business's custom branding.
     * Returns the color theme, header layout, logo style, capacity display preferences, and analytics
     * tracking IDs (Google Analytics, Google Tag Manager, Facebook Pixel). Pass no business key to get
     * the system default design.
     *
     * @return BusinessDesignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessDesignGetRequest $request): BusinessDesignGetResponse
    {
        return new BusinessDesignGetResponse($this->client->request('/Wl/Business/Design/BusinessDesign.json', $request->params(), 'GET'));
    }
}
