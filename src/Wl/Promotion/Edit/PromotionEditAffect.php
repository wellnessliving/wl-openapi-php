<?php

namespace WlSdk\Wl\Promotion\Edit;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Promotion/Edit/PromotionEditAffect.json
 */
class PromotionEditAffect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Promotion/Edit/PromotionEditAffect.json.
     *
     * @return PromotionEditAffectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PromotionEditAffectGetRequest $request): PromotionEditAffectGetResponse
    {
        return new PromotionEditAffectGetResponse($this->client->request('/Wl/Promotion/Edit/PromotionEditAffect.json', $request->params(), 'GET'));
    }
}
