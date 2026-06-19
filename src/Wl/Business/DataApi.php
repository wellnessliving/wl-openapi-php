<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Returns detailed information about the specified business, including locale, franchise status, services, tips,
 * social URLs, and logo.
 */
class DataApi
{
    /**
     * The maximum height of the business image (in pixels).
     *
     * @var int|null
     */
    public ?int $i_logo_height = null;

    /**
     * The maximum width of the business image (in pixels).
     *
     * @var int|null
     */
    public ?int $i_logo_width = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The authorization token.
     * This may be used instead of `k_business` to
     * identify a business.
     *
     * @var string|null
     */
    public ?string $text_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns detailed information about the specified business, including locale, franchise status, services, tips, social URLs, and logo.
     *
     * Used to bootstrap client-facing pages and widgets that need to know the full business profile: which
     * services are enabled, tip and progress log settings, franchise relationship, social media links, and
     * deep links to the schedule, catalog, and sign-up pages. Accepts either a business key or a location
     * request token for widget contexts where the key is not available.
     *
     * @return DataApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): DataApiGetResponse
    {
        return new DataApiGetResponse($this->client->request('/Wl/Business/Data.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'i_logo_height' => $this->i_logo_height,
            'i_logo_width' => $this->i_logo_width,
            'k_business' => $this->k_business,
            'text_token' => $this->text_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
