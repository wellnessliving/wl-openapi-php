<?php

namespace WlSdk\Wl\Classes\Period\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about class session.
 */
class ClassPeriod
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about class session.
     *
     * @return ClassPeriodGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClassPeriodGetRequest $request): ClassPeriodGetResponse
    {
        return new ClassPeriodGetResponse($this->client->request('/Wl/Classes/Period/Info/ClassPeriod.json', $request->params(), 'GET'));
    }
}
