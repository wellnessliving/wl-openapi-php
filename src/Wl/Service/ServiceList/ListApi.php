<?php
namespace WlSdk\Wl\Service\ServiceList;

use WlSdk\WlSdkClient;

/**
 * Returns list of appointment type in the business.
 */
class ListApi
{
    /**
     * Whether to return franchisee-created appointment types (if business is franchisor).
     * `true` to include franchisee-created appointment types.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Business key, primary key.
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
     * Returns list of appointment type in the business.
     *
     * Gets key of the business and returns all available appointment types with their names and categories.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Service/ServiceList/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
