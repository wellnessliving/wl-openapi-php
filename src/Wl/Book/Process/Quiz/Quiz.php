<?php
namespace WlSdk\Wl\Book\Process\Quiz;

use WlSdk\WlSdkClient;

/**
 * Defines list of required quizzes.
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

    /**
     * Finished booking process and save quiz responses (if quiz step is the last in booking wizard).
     *
     * Validates session selection and asset requirements, stores quiz responses in the booking process context,
     * and attempts to complete the booking without payment when no payment step is needed. Returns visit keys,
     * activity keys, and a flag indicating whether additional wizard steps are still required.
     *
     * @return QuizPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizPostRequest $request): QuizPostResponse
    {
        return new QuizPostResponse($this->client->request('/Wl/Book/Process/Quiz/Quiz.json', $request->params(), 'POST'));
    }
}
