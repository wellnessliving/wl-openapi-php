<?php

namespace WlSdk\Core\Search\Autoscaling;

use WlSdk\WlSdkClient;

/**
 * Suspend autoscaling activities of the PostgreSQL instances for search index.
 */
class AutoscalingSuspend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Suspend autoscaling activities of the PostgreSQL instances for search index.
     *
     * @return AutoscalingSuspendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutoscalingSuspendPostRequest $request): AutoscalingSuspendPostResponse
    {
        return new AutoscalingSuspendPostResponse($this->client->request('/Core/Search/Autoscaling/AutoscalingSuspend.json', $request->params(), 'POST'));
    }

    /**
     * Unsuspend autoscaling activities of the PostgreSQL instances for search index.
     *
     * @return AutoscalingSuspendDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AutoscalingSuspendDeleteRequest $request): AutoscalingSuspendDeleteResponse
    {
        return new AutoscalingSuspendDeleteResponse($this->client->request('/Core/Search/Autoscaling/AutoscalingSuspend.json', $request->params(), 'DELETE'));
    }
}
