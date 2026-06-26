<?php

namespace WlSdk\Wl\User\Option;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/User/Option/Option.json
 */
class Option
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/User/Option/Option.json.
     *
     * @return OptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(OptionPostRequest $request): OptionPostResponse
    {
        return new OptionPostResponse($this->client->request('/Wl/User/Option/Option.json', $request->params(), 'POST'));
    }

    /**
     * Removes option value for specified user.
     *
     * @return OptionDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(OptionDeleteRequest $request): OptionDeleteResponse
    {
        return new OptionDeleteResponse($this->client->request('/Wl/User/Option/Option.json', $request->params(), 'DELETE'));
    }
}
