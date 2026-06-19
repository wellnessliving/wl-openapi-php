<?php
namespace WlSdk\Wl\Login\Search\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Performs access checks and returns a list of users, depending on the search query.
 */
class ListApi
{
    /**
     * `true` - search among whole franchise; `false` - search in specified business only.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee_search_wide = null;

    /**
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The search string. Clients can be matched by name or email.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs access checks and returns a list of users, depending on the search query.
     *
     * When a search string is provided, returns clients whose name or email matches the query within the specified
     * business. When the search string is empty, returns recently viewed clients. Each result includes the
     * client's
     * name, email, phone, member ID, and user key.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Login/Search/StaffApp/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_franchisee_search_wide' => $this->is_franchisee_search_wide,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
