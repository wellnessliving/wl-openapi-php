<?php

namespace WlSdk\Wl\Zoom\Recover;

/**
 * Response from GET
 */
class ZoomRecoverGetResponse
{
    /**
     * List of unloaded meeting records. Each value is:
     *
     * @var ZoomRecoverGetResponseMeetingList[]|null
     */
    public ?array $a_meeting_list = null;

    public function __construct(array $data)
    {
        $this->a_meeting_list = isset($data['a_meeting_list']) ? array_map(static fn ($item) => new ZoomRecoverGetResponseMeetingList((array)$item), (array)$data['a_meeting_list']) : null;
    }
}
