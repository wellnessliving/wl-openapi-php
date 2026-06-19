<?php
namespace WlSdk\Wl\Reward\Action\CategoryList;

use WlSdk\WlSdkClient;

/**
 * Retrieves all reward action categories for business specified in
 * `k_business`.
 */
class CategoryListApi
{
    /**
     * ID of a business to show information for.
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
     * Retrieves all reward action categories for business specified in
`k_business`.
     *
     * Returns the list of reward action categories including category type ID, database key, and title for the
     * given business.
     *
     * @return CategoryListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): CategoryListApiGetResponse
    {
        return new CategoryListApiGetResponse($this->client->request('/Wl/Reward/Action/CategoryList/CategoryList.json', $this->params(), 'GET'));
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
