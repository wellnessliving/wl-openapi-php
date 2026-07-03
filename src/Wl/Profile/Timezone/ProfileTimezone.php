<?php

namespace WlSdk\Wl\Profile\Timezone;

use WlSdk\WlSdkClient;

/**
 * Gets a list of timezones with currently selected user's timezone and the business policy adjustment whether
 *  clients are allowed to adjust timezone.
 */
class ProfileTimezone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a list of timezones with currently selected user's timezone and the business policy adjustment whether
 clients are allowed to adjust timezone.
     *
     * Includes the timezone abbreviation, UTC shift, and display order for each entry, and falls back to
     *  the business-configured guest timezone when no member is signed in.
     *
     * @return ProfileTimezoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProfileTimezoneGetRequest $request): ProfileTimezoneGetResponse
    {
        return new ProfileTimezoneGetResponse($this->client->request('/Wl/Profile/Timezone/ProfileTimezone.json', $request->params(), 'GET'));
    }

    /**
     * Updates selected timezone for the site visitor in the given business.
     *
     * Validates the requested timezone against the business timezone deprecation policy, then saves it
     *  either to the member's profile field or, for a guest, to the guest-scoped timezone selection.
     *
     * @return ProfileTimezonePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ProfileTimezonePutRequest $request): ProfileTimezonePutResponse
    {
        return new ProfileTimezonePutResponse($this->client->request('/Wl/Profile/Timezone/ProfileTimezone.json', $request->params(), 'PUT'));
    }
}
