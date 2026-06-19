<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relationships list.
 */
class FamilyRelationApi
{
    /**
     * The business key.
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
     * Gets relationships list.
     *
     * Returns all relationship types enabled for the given business, or all system-defined relationship types if
     * no
     * business key is provided.
     *
     * @return FamilyRelationApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): FamilyRelationApiGetResponse
    {
        return new FamilyRelationApiGetResponse($this->client->request('/Wl/Family/Relation/FamilyRelation.json', $this->params(), 'GET'));
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
