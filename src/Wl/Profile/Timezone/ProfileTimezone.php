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
     * @return ProfileTimezonePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ProfileTimezonePutRequest $request): ProfileTimezonePutResponse
    {
        return new ProfileTimezonePutResponse($this->client->request('/Wl/Profile/Timezone/ProfileTimezone.json', $request->params(), 'PUT'));
    }
}
