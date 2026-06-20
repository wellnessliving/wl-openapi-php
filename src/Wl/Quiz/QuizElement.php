<?php

namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Returns quiz element data including settings, elements, and access information for the given quiz.
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
     * Returns quiz element data including settings, elements, and access information for the given quiz.
     *
     * Loads the quiz configuration, element list, and access log for the specified business and user context,
     * applying franchise and privilege checks before returning the result.
     *
     * @deprecated Use {@link Wl\Quiz\QuizElement72Api} instead.
     *
     * @return QuizElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizElementGetRequest $request): QuizElementGetResponse
    {
        return new QuizElementGetResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'GET'));
    }

    /**
     * Creates or updates a quiz with the given elements and settings.
     *
     * When no quiz key is provided, a new quiz is created; when a key is given, the existing quiz
     * is updated in place. Element list and configuration are saved in a single transaction.
     *
     * @deprecated Use {@link Wl\Quiz\QuizElement72Api} instead.
     *
     * @return QuizElementPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizElementPostRequest $request): QuizElementPostResponse
    {
        return new QuizElementPostResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'POST'));
    }

    /**
     * Updates the active status of the given quiz.
     *
     * Toggles whether the quiz is available for respondents to fill out. Inactive quizzes are hidden
     * from the booking and profile flows but their existing responses are preserved.
     *
     * @deprecated Use {@link Wl\Quiz\QuizElement72Api} instead.
     *
     * @return QuizElementPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(QuizElementPutRequest $request): QuizElementPutResponse
    {
        return new QuizElementPutResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the quiz with the given key.
     *
     * Permanently removes the quiz and all associated elements.
     *
     * @deprecated Use {@link Wl\Quiz\QuizElement72Api} instead.
     *
     * @return QuizElementDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizElementDeleteRequest $request): QuizElementDeleteResponse
    {
        return new QuizElementDeleteResponse($this->client->request('/Wl/Quiz/QuizElement.json', $request->params(), 'DELETE'));
    }
}
