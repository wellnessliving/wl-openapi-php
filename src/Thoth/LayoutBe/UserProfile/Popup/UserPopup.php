<?php

namespace WlSdk\Thoth\LayoutBe\UserProfile\Popup;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/LayoutBe/UserProfile/Popup/UserPopup.json
 */
class UserPopup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/LayoutBe/UserProfile/Popup/UserPopup.json.
     *
     * @return UserPopupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(UserPopupGetRequest $request): UserPopupGetResponse
    {
        return new UserPopupGetResponse($this->client->request('/Thoth/LayoutBe/UserProfile/Popup/UserPopup.json', $request->params(), 'GET'));
    }
}
