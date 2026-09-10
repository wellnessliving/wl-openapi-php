<?php

namespace WlSdk\Wl\Schedule\ScheduleDesign;

use WlSdk\WlSdkClient;

/**
 * This method is called to process GET query.
 */
class ScheduleDesign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process GET query.
     *
     * Loads the schedule design settings configured for the business, including cell size, time
     *  interval, first day of week, and the colors and toggles that control what is shown on the
     *  staff schedule (staff busy diagonal lines, drag-and-drop, cancelled appointments/classes,
     *  notes, and icons). Access is public when no user key is given, because the schedule design
     *  also drives public schedule widgets that guests can view; when a user key is given, the
     *  user's profile access to the business is checked.
     *
     * @return ScheduleDesignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleDesignGetRequest $request): ScheduleDesignGetResponse
    {
        return new ScheduleDesignGetResponse($this->client->request('/Wl/Schedule/ScheduleDesign/ScheduleDesign.json', $request->params(), 'GET'));
    }

    /**
     * Saves schedule design settings including schedule config settings.
     *
     * Validates that the current user has permission to edit the business schedule design, then
     *  merges the given fields into the existing schedule design and schedule config records for
     *  the business and user, creating them when they do not exist yet. Saves the updated schedule
     *  design row and the schedule config's serialized settings, refreshes the related caches,
     *  marks the config as the user's default filter when requested, and logs the change when any
     *  setting was actually modified.
     *
     * @return ScheduleDesignPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ScheduleDesignPostRequest $request): ScheduleDesignPostResponse
    {
        return new ScheduleDesignPostResponse($this->client->request('/Wl/Schedule/ScheduleDesign/ScheduleDesign.json', $request->params(), 'POST'));
    }
}
