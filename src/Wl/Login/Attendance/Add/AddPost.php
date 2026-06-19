<?php
namespace WlSdk\Wl\Login\Attendance\Add;

use WlSdk\WlSdkClient;

/**
 * Adds client to attendance list.
 */
class AddPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
