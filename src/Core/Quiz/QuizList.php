<?php

namespace WlSdk\Core\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Quiz/QuizList.json
 */
class QuizList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Quiz/QuizList.json.
     *
     * @return QuizListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizListGetRequest $request): QuizListGetResponse
    {
        return new QuizListGetResponse($this->client->request('/Core/Quiz/QuizList.json', $request->params(), 'GET'));
    }
}
