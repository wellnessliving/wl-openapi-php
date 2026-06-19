<?php
namespace WlSdk\Wl\Book\Process\Quiz;

use WlSdk\WlSdkClient;

/**
 * Defines list of required quizzes.
 */
class QuizGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Defines list of required quizzes.
     *
     * Merges the quizzes required by the booking itself with quizzes tied to the selected purchase options,
     * filters out internal (staff-only) quizzes for non-backend requests, and returns the unified list in
     * `a_quiz`.
     *
     * @return QuizGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizGetRequest $request): QuizGetResponse
    {
        return new QuizGetResponse($this->client->request('/Wl/Book/Process/Quiz/Quiz.json', $request->params(), 'GET'));
    }
}
