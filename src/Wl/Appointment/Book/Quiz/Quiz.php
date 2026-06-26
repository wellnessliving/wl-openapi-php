<?php

namespace WlSdk\Wl\Appointment\Book\Quiz;

use WlSdk\WlSdkClient;

/**
 * Defines a list of required quizzes.
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
     * Defines a list of required quizzes.
     *
     * @return QuizGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizGetRequest $request): QuizGetResponse
    {
        return new QuizGetResponse($this->client->request('/Wl/Appointment/Book/Quiz/Quiz.json', $request->params(), 'GET'));
    }
}
