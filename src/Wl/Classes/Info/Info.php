<?php

namespace WlSdk\Wl\Classes\Info;

use WlSdk\WlSdkClient;

/**
 * Gets information about class.
 */
class Info
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about class.
     *
     * Returns the class title, service logo, and whether the class is actually an event, based on the
     *  given business and class keys.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Wl/Classes/Info/Info.json', $request->params(), 'GET'));
    }
}
