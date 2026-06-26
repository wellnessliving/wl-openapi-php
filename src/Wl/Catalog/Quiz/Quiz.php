<?php

namespace WlSdk\Wl\Catalog\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Catalog/Quiz/Quiz.json
 */
class Quiz
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Catalog/Quiz/Quiz.json.
     *
     * @return QuizGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizGetRequest $request): QuizGetResponse
    {
        return new QuizGetResponse($this->client->request('/Wl/Catalog/Quiz/Quiz.json', $request->params(), 'GET'));
    }
}
