<?php

namespace WlSdk\Wl\User\Option\PromptList;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/User/Option/PromptList/PromptList.json
 */
class PromptList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/User/Option/PromptList/PromptList.json.
     *
     * @return PromptListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromptListPostRequest $request): PromptListPostResponse
    {
        return new PromptListPostResponse($this->client->request('/Wl/User/Option/PromptList/PromptList.json', $request->params(), 'POST'));
    }

    /**
     * Removes option value for specified user.
     *
     * @return PromptListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(PromptListDeleteRequest $request): PromptListDeleteResponse
    {
        return new PromptListDeleteResponse($this->client->request('/Wl/User/Option/PromptList/PromptList.json', $request->params(), 'DELETE'));
    }
}
