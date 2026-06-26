<?php

namespace WlSdk\Core\Jira\AI;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Jira/AI/JiraRequest.json
 */
class JiraRequest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Jira/AI/JiraRequest.json.
     *
     * @return JiraRequestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(JiraRequestPostRequest $request): JiraRequestPostResponse
    {
        return new JiraRequestPostResponse($this->client->request('/Core/Jira/AI/JiraRequest.json', $request->params(), 'POST'));
    }
}
