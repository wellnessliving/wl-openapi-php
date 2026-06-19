<?php
namespace WlSdk\Wl\Family\Relation;

use WlSdk\WlSdkClient;

/**
 * Gets relationships list.
 */
class FamilyRelationGet
{
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
     * @return FamilyRelationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FamilyRelationGetRequest $request): FamilyRelationGetResponse
    {
        return new FamilyRelationGetResponse($this->client->request('/Wl/Family/Relation/FamilyRelation.json', $request->params(), 'GET'));
    }
}
