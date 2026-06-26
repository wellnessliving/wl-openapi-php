<?php

namespace WlSdk\Wl\Virtual\Setting;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of virtual settings.
 */
class Setting
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of virtual settings.
     *
     * @return SettingPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SettingPutRequest $request): SettingPutResponse
    {
        return new SettingPutResponse($this->client->request('/Wl/Virtual/Setting/Setting.json', $request->params(), 'PUT'));
    }
}
