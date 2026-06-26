<?php

namespace WlSdk\Core\Jira\AI;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Jira/AI/JiraTaskRequest.json
 */
class JiraTaskRequest
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Jira/AI/JiraTaskRequest.json.
     *
     * @return JiraTaskRequestPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(JiraTaskRequestPostRequest $request): JiraTaskRequestPostResponse
    {
        return new JiraTaskRequestPostResponse($this->client->request('/Core/Jira/AI/JiraTaskRequest.json', $request->params(), 'POST'));
    }
}
