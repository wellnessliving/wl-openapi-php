<?php
namespace WlSdk\Wl\Resource\ResourceList;

use WlSdk\WlSdkClient;

/**
 * Returns assets list in the business.
 */
class ListApi
{
    /**
     * Type of the resource.
     * 
     * 1 - if this is a bookable asset.
     * 2 - if this is an off-site location with its own address.
     *
     * @var int|null
     */
    public ?int $id_category = null;

    /**
     * Whether to return franchisee-created resources (if business is franchisor).
     * `true` to include franchisee-created resources.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Business key, primary key in RsBusinessSql.
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
     * Returns assets list in the business.
     *
     * Returns all assets if `$id_category` is not specified or only certain category assets. Includes
     *   main information about assets.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Resource/ResourceList/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_category' => $this->id_category,
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
