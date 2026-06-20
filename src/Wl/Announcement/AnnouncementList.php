<?php

namespace WlSdk\Wl\Announcement;

use WlSdk\WlSdkClient;

/**
 * Returns a list of announcements for the given business and location.
 */
class AnnouncementList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of announcements for the given business and location.
     *
     * Retrieves published announcements visible to the current user, optionally filtered to a single location.
     *  In backend mode the caller can also sort the results by column and direction, and the chosen sort
     *  preference is persisted per user so the backend grid remembers
     *  it across requests. Access is validated against announcement editor permissions for the business.
     *
     * @return AnnouncementListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AnnouncementListGetRequest $request): AnnouncementListGetResponse
    {
        return new AnnouncementListGetResponse($this->client->request('/Wl/Announcement/AnnouncementList.json', $request->params(), 'GET'));
    }
}
