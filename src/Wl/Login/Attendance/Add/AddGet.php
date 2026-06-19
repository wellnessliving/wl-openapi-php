<?php
namespace WlSdk\Wl\Login\Attendance\Add;

use WlSdk\WlSdkClient;

/**
 * Gets information about ability of user to pay for given session in any ways.
 */
class AddGet
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
}
