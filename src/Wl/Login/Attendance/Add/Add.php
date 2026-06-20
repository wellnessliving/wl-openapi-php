<?php

namespace WlSdk\Wl\Login\Attendance\Add;

use WlSdk\WlSdkClient;

/**
 * Gets information about ability of user to pay for given session in any ways.
 */
class Add
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about ability of user to pay for given session in any ways.
     *
     * Returns available Purchase Options and session passes that can be used to pay for the specified class
     * session,
     * along with the session price, the client's account balance, and whether the session is free.
     *
     * @return AddGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddGetRequest $request): AddGetResponse
    {
        return new AddGetResponse($this->client->request('/Wl/Login/Attendance/Add/Add.json', $request->params(), 'GET'));
    }

    /**
     * Adds client to attendance list.
     *
     * Books the specified client into the given class session using the chosen payment option (debit, Purchase
     * Option,
     * session pass, or unpaid), and returns the resulting visit key, visit status, and a store URL if payment is
     * still
     * required.
     *
     * @return AddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddPostRequest $request): AddPostResponse
    {
        return new AddPostResponse($this->client->request('/Wl/Login/Attendance/Add/Add.json', $request->params(), 'POST'));
    }
}
