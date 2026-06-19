<?php
namespace WlSdk\Wl\Business\Design;

use WlSdk\WlSdkClient;

/**
 * API method to get business design data.
 */
class BusinessDesignApi
{
    /**
     * Business key to get design data.
     * 
     * May be `null`. In this case default business design data is returned.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * @return BusinessDesignApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessDesignApiGetResponse
    {
        return new BusinessDesignApiGetResponse($this->client->request('/Wl/Business/Design/BusinessDesign.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
