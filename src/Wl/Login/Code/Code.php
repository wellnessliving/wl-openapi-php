<?php

namespace WlSdk\Wl\Login\Code;

use WlSdk\WlSdkClient;

/**
 * Applies login code.
 */
class Code
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Applies login code.
     *
     * Validates the source mode, business, redemption code, and that the current user has access to
     *  the target profile. Attempts to redeem the code as a coupon first; if the code is not a coupon,
     *  falls back to checking it as another type of redemption code, for example a gift card number,
     *  and logs the change.
     *
     * @return CodePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CodePostRequest $request): CodePostResponse
    {
        return new CodePostResponse($this->client->request('/Wl/Login/Code/Code.json', $request->params(), 'POST'));
    }
}
