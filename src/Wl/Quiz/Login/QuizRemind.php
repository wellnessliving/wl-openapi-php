<?php

namespace WlSdk\Wl\Quiz\Login;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Quiz/Login/QuizRemind.json
 */
class QuizRemind
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Quiz/Login/QuizRemind.json.
     *
     * @return QuizRemindPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizRemindPostRequest $request): QuizRemindPostResponse
    {
        return new QuizRemindPostResponse($this->client->request('/Wl/Quiz/Login/QuizRemind.json', $request->params(), 'POST'));
    }
}
