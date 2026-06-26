<?php

namespace WlSdk\Wl\Video\Setting;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Video/Setting/Setting.json
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
     * Calls PUT /Wl/Video/Setting/Setting.json.
     *
     * @return SettingPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(SettingPutRequest $request): SettingPutResponse
    {
        return new SettingPutResponse($this->client->request('/Wl/Video/Setting/Setting.json', $request->params(), 'PUT'));
    }
}
