<?php

namespace WlSdk\Core\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Quiz/QuizElement.json
 */
class QuizElement
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Quiz/QuizElement.json.
     *
     * @return QuizElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizElementGetRequest $request): QuizElementGetResponse
    {
        return new QuizElementGetResponse($this->client->request('/Core/Quiz/QuizElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates a quiz with the given elements and settings.
     *
     * When no quiz key is provided, a new quiz is created; when a key is given, the existing quiz
     * is updated in place. Element list and configuration are saved in a single transaction.
     *
     * @return QuizElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizElementPostRequest $request): QuizElementPostResponse
    {
        return new QuizElementPostResponse($this->client->request('/Core/Quiz/QuizElement.json', $request->params(), 'POST'));
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
        return new QuizElementPutResponse($this->client->request('/Core/Quiz/QuizElement.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the quiz with the given key.
     *
     * Permanently removes the quiz and all associated elements.
     *
     * @return QuizElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizElementDeleteRequest $request): QuizElementDeleteResponse
    {
        return new QuizElementDeleteResponse($this->client->request('/Core/Quiz/QuizElement.json', $request->params(), 'DELETE'));
    }
}
