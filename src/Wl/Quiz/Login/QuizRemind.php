<?php

namespace WlSdk\Wl\Quiz\Login;

use WlSdk\WlSdkClient;

/**
 * Sends a reminder notification for an incomplete quiz.
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
     * Sends a reminder notification for an incomplete quiz.
     *
     * Resolves the quiz login key from the response key when needed, validates access and that the quiz login
     * exists and is visible, checks that the quiz is not restricted to staff only, then sends a reminder
     * notification to the client.
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
