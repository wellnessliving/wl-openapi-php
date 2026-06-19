<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Updates the active status of the given quiz.
 *
 * @deprecated
 */
class QuizElementPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the active status of the given quiz.
     *
     * Toggles whether the quiz is available for respondents to fill out. Inactive quizzes are hidden
     * from the booking and profile flows but their existing responses are preserved.
     *
     * @return QuizElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(QuizElementPutRequest $request): QuizElementPutResponse
    {
        return new QuizElementPutResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'PUT'));
    }
}
