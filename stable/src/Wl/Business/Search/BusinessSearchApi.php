<?php
namespace WlSdk\Wl\Business\Search;

use WlSdk\WlSdkClient;

/**
 * Searches for businesses by name and returns matching business keys.
 */
class BusinessSearchApi
{
    /**
     * If `true`, the return only active customers, `false` - all business.
     *
     * @var bool|null
     */
    public ?bool $is_customer = null;

    /**
     * If `true`, returns only active customer businesses, if `false`, returns all businesses.
     *
     * @var bool|null
     */
    public ?bool $is_strict = null;

    /**
     * Given business name to search by.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for businesses by name and returns matching business keys.
     *
     * Used in internal tools and admin pages to find a business by name or key when only partial information
     * is known. Protected by a captcha to prevent automated enumeration. In strict mode, the title must
     * match exactly; otherwise partial word matches are returned sorted by relevance.
     *
     * @return BusinessSearchApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessSearchApiGetResponse
    {
        return new BusinessSearchApiGetResponse($this->client->request('/Wl/Business/Search/BusinessSearch.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_customer' => $this->is_customer,
            'is_strict' => $this->is_strict,
            'text_name' => $this->text_name,
            ],
            static fn($v) => $v !== null
        );
    }
}
