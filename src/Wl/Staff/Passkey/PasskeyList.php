<?php

namespace WlSdk\Wl\Staff\Passkey;

use WlSdk\WlSdkClient;

/**
 * Lists the passkeys of the active staff members of the business.
 */
class PasskeyList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Lists the passkeys of the active staff members of the business.
     *
     * Only staff members who have passkeys are listed. The list does not depend on whether passkey sign-in is
     * enabled
     * for the business: the passkeys that exist stay visible and removable after the option is turned off. The
     * staff members whose passkeys the signed-in user may not
     * remove are listed too, with `can_remove` set to `false`: the user sees that they exist, and the removal
     * stays
     * refused by `delete()`.
     *
     * @return PasskeyListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PasskeyListGetRequest $request): PasskeyListGetResponse
    {
        return new PasskeyListGetResponse($this->client->request('/Wl/Staff/Passkey/PasskeyList.json', $request->params(), 'GET'));
    }
}
