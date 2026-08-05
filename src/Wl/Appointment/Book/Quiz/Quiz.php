<?php

namespace WlSdk\Wl\Appointment\Book\Quiz;

use WlSdk\WlSdkClient;

/**
 * Gets a list of required quizzes.
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
     * Gets a list of required quizzes.
     *
     * Gets a list of required quizzes which associated with requested service/resourse.
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
