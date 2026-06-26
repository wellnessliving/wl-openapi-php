<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

use WlSdk\WlSdkClient;

/**
 * Gets list of staff available to assigned for sms chat clients.
 */
class SmsChatStaffAssignList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of staff available to assigned for sms chat clients.
     *
     * @return SmsChatStaffAssignListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmsChatStaffAssignListGetRequest $request): SmsChatStaffAssignListGetResponse
    {
        return new SmsChatStaffAssignListGetResponse($this->client->request('/Wl/Business/Sms/Chat/Staff/SmsChatStaffAssignList.json', $request->params(), 'GET'));
    }
}
