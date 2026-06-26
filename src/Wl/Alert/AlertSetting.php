<?php

namespace WlSdk\Wl\Alert;

use WlSdk\WlSdkClient;

/**
 * Save alert settings for the user.
 */
class AlertSetting
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Save alert settings for the user.
     *
     * @return AlertSettingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AlertSettingPostRequest $request): AlertSettingPostResponse
    {
        return new AlertSettingPostResponse($this->client->request('/Wl/Alert/AlertSetting.json', $request->params(), 'POST'));
    }
}
