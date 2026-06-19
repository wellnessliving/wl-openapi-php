<?php
namespace WlSdk\Wl\Service\ServiceList;

use WlSdk\WlSdkClient;

/**
 * Returns list of appointment type in the business.
 */
class ListGet
{
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
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Service/ServiceList/List.json', $request->params(), 'GET'));
    }
}
