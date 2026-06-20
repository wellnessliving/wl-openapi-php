<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

use WlSdk\WlSdkClient;

/**
 * Applies the guest pass of the specified login promotion to the attendee's visit.
 */
class Apply
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Applies the guest pass of the specified login promotion to the attendee's visit.
     *
     * If the visit is already paid (with a regular session pass or an existing guest pass),
     * the previous payment is unwound before the new guest pass is applied.
     *
     * @return ApplyPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplyPostRequest $request): ApplyPostResponse
    {
        return new ApplyPostResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Apply/Apply.json', $request->params(), 'POST'));
    }
}
