<?php
namespace WlSdk\Wl\Book\Process\Quiz;

use WlSdk\WlSdkClient;

/**
 * Finished booking process and save quiz responses (if quiz step is the last in booking wizard).
 */
class QuizPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
