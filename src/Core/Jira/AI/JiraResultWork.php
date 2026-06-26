<?php

namespace WlSdk\Core\Jira\AI;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Jira/AI/JiraResultWork.json
 */
class JiraResultWork
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Core/Jira/AI/JiraResultWork.json.
     *
     * @return JiraResultWorkPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(JiraResultWorkPostRequest $request): JiraResultWorkPostResponse
    {
        return new JiraResultWorkPostResponse($this->client->request('/Core/Jira/AI/JiraResultWork.json', $request->params(), 'POST'));
    }
}
