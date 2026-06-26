<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

use WlSdk\WlSdkClient;

/**
 * Deletes a report from collection.
 */
class CollectionReportManage
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Deletes a report from collection.
     *
     * @return CollectionReportManageDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CollectionReportManageDeleteRequest $request): CollectionReportManageDeleteResponse
    {
        return new CollectionReportManageDeleteResponse($this->client->request('/Wl/Report/Collection/Dynamic/CollectionReportManage.json', $request->params(), 'DELETE'));
    }
}
