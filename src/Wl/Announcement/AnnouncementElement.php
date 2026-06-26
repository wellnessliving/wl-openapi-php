<?php

namespace WlSdk\Wl\Announcement;

use WlSdk\WlSdkClient;

/**
 * Returns information about the announcement.
 */
class AnnouncementElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about the announcement.
     *
     * @return AnnouncementElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AnnouncementElementGetRequest $request): AnnouncementElementGetResponse
    {
        return new AnnouncementElementGetResponse($this->client->request('/Wl/Announcement/AnnouncementElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates/updates announcement.
     *
     * @return AnnouncementElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AnnouncementElementPostRequest $request): AnnouncementElementPostResponse
    {
        return new AnnouncementElementPostResponse($this->client->request('/Wl/Announcement/AnnouncementElement.json', $request->params(), 'POST'));
    }

    /**
     * Sets announcement 'pinned' status.
Only one announcement can be pinned for business.
     *
     * @return AnnouncementElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AnnouncementElementPutRequest $request): AnnouncementElementPutResponse
    {
        return new AnnouncementElementPutResponse($this->client->request('/Wl/Announcement/AnnouncementElement.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes announcement.
     *
     * @return AnnouncementElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AnnouncementElementDeleteRequest $request): AnnouncementElementDeleteResponse
    {
        return new AnnouncementElementDeleteResponse($this->client->request('/Wl/Announcement/AnnouncementElement.json', $request->params(), 'DELETE'));
    }
}
