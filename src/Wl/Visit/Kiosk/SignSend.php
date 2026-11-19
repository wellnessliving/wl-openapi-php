<?php

namespace WlSdk\Wl\Visit\Kiosk;

use WlSdk\WlSdkClient;

/**
 * Sends the client an email with the waiver or the contract that the client has not signed.
 */
class SignSend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the client an email with the waiver or the contract that the client has not signed.
     *
     * Without {@link \WlSdk\Wl\Visit\Kiosk\SignSend} the waiver of the business is sent, if the business requires
     * a
     * waiver and the client has not signed it. With it, the contract of that purchase item is sent, if it is a
     * contract of the business that the client has not signed. The email is the copy of the document that the
     * profile of the client sends, without a date of signing. A normal answer means that the email is queued; the
     * email address is not returned.
     *
     * The checks go in this order, and the code of a refusal tells which of them has failed:
     * <ul>
     *   <li>`access-backend`: no session of a staff member, or no access to the business;</li>
     *   <li>`access`: no access to the location or to the client;</li>
     *   <li>`sign-none`: the client has no such document to sign;</li>
     *   <li>`mail-nx`: the client has no email address.</li>
     * </ul>
     *
     * @return SignSendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SignSendPostRequest $request): SignSendPostResponse
    {
        return new SignSendPostResponse($this->client->request('/Wl/Visit/Kiosk/SignSend.json', $request->params(), 'POST'));
    }
}
