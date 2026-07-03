<?php

namespace WlSdk\Wl\Catalog\Quiz;

use WlSdk\WlSdkClient;

/**
 * Gets quizzes for the selected purchase options.
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
     * Gets quizzes for the selected purchase options.
     *
     * Resolves the quizzes required or available for the services behind the given purchase items,
     *  taking into account quizzes already completed by the specified user, and returns them so the
     *  client can collect answers before booking is finished.
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
