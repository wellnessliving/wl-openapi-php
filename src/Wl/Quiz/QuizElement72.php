<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Returns quiz element data including settings, elements, and access information for the given quiz.
 */
class QuizElement72
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns quiz element data including settings, elements, and access information for the given quiz.
     *
     * Loads the quiz configuration, element list, and access log for the specified business and user context,
     * applying franchise and privilege checks before returning the result.
     *
     * @return QuizElement72GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizElement72GetRequest $request): QuizElement72GetResponse
    {
        return new QuizElement72GetResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates a quiz with the given elements and settings.
     *
     * When no quiz key is provided, a new quiz is created; when a key is given, the existing quiz
     * is updated in place. Element list and configuration are saved in a single transaction.
     *
     * @return QuizElement72PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizElement72PostRequest $request): QuizElement72PostResponse
    {
        return new QuizElement72PostResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $request->params(), 'POST'));
    }

    /**
     * Updates the active status of the given quiz.
     *
     * Toggles whether the quiz is available for respondents to fill out. Inactive quizzes are hidden
     * from the booking and profile flows but their existing responses are preserved.
     *
     * @return QuizElement72PutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(QuizElement72PutRequest $request): QuizElement72PutResponse
    {
        return new QuizElement72PutResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the quiz with the given key.
     *
     * Permanently removes the quiz and all associated elements.
     *
     * @return QuizElement72DeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizElement72DeleteRequest $request): QuizElement72DeleteResponse
    {
        return new QuizElement72DeleteResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $request->params(), 'DELETE'));
    }
}
