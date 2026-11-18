<?php

namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Returns the list of business quizzes together with client registration and import status.
 */
class QuizList79
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of business quizzes together with client registration and import status.
     *
     * Loads the quiz list for the business filtered by active state and search phrase, then
     *  marks which quizzes still require registration for the current login and which quizzes
     *  were imported from an external system. Also stores the requested active-state filter as
     *  the user's default quiz view.
     *
     * @return QuizList79GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizList79GetRequest $request): QuizList79GetResponse
    {
        return new QuizList79GetResponse($this->client->request('/Wl/Quiz/QuizList79.json', $request->params(), 'GET'));
    }
}
