<?php

namespace WlSdk\Wl\Rank\Setting;

use WlSdk\WlSdkClient;

/**
 * Save belts settings for the business.
 */
class RankSetting
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Save belts settings for the business.
     *
     * @return RankSettingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RankSettingPostRequest $request): RankSettingPostResponse
    {
        return new RankSettingPostResponse($this->client->request('/Wl/Rank/Setting/RankSetting.json', $request->params(), 'POST'));
    }
}
