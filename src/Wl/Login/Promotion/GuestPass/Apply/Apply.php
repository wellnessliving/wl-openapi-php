<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

use WlSdk\WlSdkClient;

/**
 * Returns a list of login promotions with available guest passes for a visit.
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
     * Returns a list of login promotions with available guest passes for a visit.
     *
     * Searches for members who have active class memberships with guest pass balance
     * applicable to the class and location of the given visit. Each result item represents
     * one eligible login promotion, not one user: if a member has several qualifying memberships,
     * each appears as a separate item.
     *
     * @return ApplyGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ApplyGetRequest $request): ApplyGetResponse
    {
        return new ApplyGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/Apply/Apply.json', $request->params(), 'GET'));
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
