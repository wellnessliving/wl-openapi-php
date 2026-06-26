<?php

namespace WlSdk\Core\Search\Autoscaling;

use WlSdk\WlSdkClient;

/**
 * Set the number of PostgreSQL instances for search index.
 */
class AutoscalingSize
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Set the number of PostgreSQL instances for search index.
     *
     * @return AutoscalingSizePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutoscalingSizePostRequest $request): AutoscalingSizePostResponse
    {
        return new AutoscalingSizePostResponse($this->client->request('/Core/Search/Autoscaling/AutoscalingSize.json', $request->params(), 'POST'));
    }
}
