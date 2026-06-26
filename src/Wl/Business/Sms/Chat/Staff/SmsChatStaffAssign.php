<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

use WlSdk\WlSdkClient;

/**
 * Gets information about staff assigned to for the chat.
 */
class SmsChatStaffAssign
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about staff assigned to for the chat.
     *
     * @return SmsChatStaffAssignGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SmsChatStaffAssignGetRequest $request): SmsChatStaffAssignGetResponse
    {
        return new SmsChatStaffAssignGetResponse($this->client->request('/Wl/Business/Sms/Chat/Staff/SmsChatStaffAssign.json', $request->params(), 'GET'));
    }

    /**
     * Save staff assign for the client chat.
     *
     * @return SmsChatStaffAssignPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsChatStaffAssignPostRequest $request): SmsChatStaffAssignPostResponse
    {
        return new SmsChatStaffAssignPostResponse($this->client->request('/Wl/Business/Sms/Chat/Staff/SmsChatStaffAssign.json', $request->params(), 'POST'));
    }
}
