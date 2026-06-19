<?php
namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns partner settings for the business identified by the given partner code.
 */
class PartnerSettingsApi
{
    /**
     * The unique code that a business can provide other businesses to tell them about system.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns partner settings for the business identified by the given partner code.
     *
     * Used when rendering the Partner Program landing page. Resolves the partner code to a business and
     * returns the business key and the home tour type so the landing page can show the appropriate demo
     * tour. A daily failed-request limit per IP prevents brute-force enumeration of partner codes.
     *
     * @return PartnerSettingsApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PartnerSettingsApiGetResponse
    {
        return new PartnerSettingsApiGetResponse($this->client->request('/Wl/Business/Partner/PartnerSettings.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'text_code' => $this->text_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
