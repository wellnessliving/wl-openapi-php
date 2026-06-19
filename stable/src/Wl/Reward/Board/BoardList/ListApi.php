<?php
namespace WlSdk\Wl\Reward\Board\BoardList;

use WlSdk\WlSdkClient;

/**
 * Retrieves all reward boards for business specified in `k_business`.
 */
class ListApi
{
    /**
     * Business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User to retrieve information about.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves all reward boards for business specified in `k_business`.
     *
     * Returns the list of reward boards available to the given user in the business, including board key and
     * title,
     * filtered to exclude boards the user is not eligible to view.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Reward/Board/BoardList/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
