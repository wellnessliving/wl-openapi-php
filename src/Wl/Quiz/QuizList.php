<?php

namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/QuizList.json
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
     * Calls GET /Wl/Quiz/QuizList.json.
     *
     * @return QuizListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizListGetRequest $request): QuizListGetResponse
    {
        return new QuizListGetResponse($this->client->request('/Wl/Quiz/QuizList.json', $request->params(), 'GET'));
    }
}
