<?php

namespace WlSdk\Wl\Business\Sms\Unread;

use WlSdk\WlSdkClient;

/**
 * Marks the last messages in the dialog in the given business with a given user as unread.
 */
class SmsUnread
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Marks the last messages in the dialog in the given business with a given user as unread.
     *
     * Only messages that were sent by client after the last message from the business to the client will be marked
     * as unread.
     *
     * @return SmsUnreadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsUnreadPostRequest $request): SmsUnreadPostResponse
    {
        return new SmsUnreadPostResponse($this->client->request('/Wl/Business/Sms/Unread/SmsUnread.json', $request->params(), 'POST'));
    }

    /**
     * Marks all messages in the dialog in the given business with a given user as read.
     *
     * Removes the unread marker for the dialog if one exists. When individual reads are
     *  disabled and the current user is an active staff member or a business admin, also
     *  records a read entry in the message history so other staff members see the
     *  conversation as read. Refreshes the unread SMS count and notifies the dialog channel
     *  about the change.
     *
     * @return SmsUnreadDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(SmsUnreadDeleteRequest $request): SmsUnreadDeleteResponse
    {
        return new SmsUnreadDeleteResponse($this->client->request('/Wl/Business/Sms/Unread/SmsUnread.json', $request->params(), 'DELETE'));
    }
}
