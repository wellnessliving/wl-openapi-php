<?php

namespace WlSdk\Wl\Staff;

use WlSdk\WlSdkClient;

/**
 * Update or create staff.
 */
class StaffElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Update or create staff.
     *
     * Creates a new staff member or updates an existing one in the business. When creating,
     * a new user account is provisioned if no matching email exists. When updating, the target
     * staff member must already belong to the business. Role, location, contact details,
     * employment dates, and custom profile fields can all be set in a single call.
     *
     * @return StaffElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(StaffElementPostRequest $request): StaffElementPostResponse
    {
        return new StaffElementPostResponse($this->client->request('/Wl/Staff/StaffElement.json', $request->params(), 'POST'));
    }
}
