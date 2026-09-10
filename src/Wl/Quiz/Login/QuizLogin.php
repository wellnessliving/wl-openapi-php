<?php

namespace WlSdk\Wl\Quiz\Login;

use WlSdk\WlSdkClient;

/**
 * Adds quiz for client profile.
 */
class QuizLogin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds quiz for client profile.
     *
     * Validates access to the target client and to the requested quiz or quizzes, requiring exactly one of
     * `k_quiz` or `a_quiz` to be provided and all requested quizzes to exist and be active. If a visit is
     * provided, marks the quizzes as uncompleted for that visit; otherwise creates new quiz login records for
     * manual assignment. Clears the quiz note cache afterwards.
     *
     * @return QuizLoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizLoginPostRequest $request): QuizLoginPostResponse
    {
        return new QuizLoginPostResponse($this->client->request('/Wl/Quiz/Login/QuizLogin.json', $request->params(), 'POST'));
    }

    /**
     * Updates the required flag of a quiz login.
     *
     * Resolves the quiz login key from the response key when needed, validates access to the quiz login,
     * updates its record in the business shard to make it visible and set the required flag, then clears the
     * quiz login cache and the related report cache.
     *
     * @return QuizLoginPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(QuizLoginPutRequest $request): QuizLoginPutResponse
    {
        return new QuizLoginPutResponse($this->client->request('/Wl/Quiz/Login/QuizLogin.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes from the client profile.
     *
     * Validates access and that the quiz exists, resolves the quiz login record (considering franchise
     * businesses when travel mode is flexible), validates that the quiz login can be deleted, then removes it,
     * logs the removal, reindexes the client in search, and clears the related report and quiz note caches.
     *
     * @return QuizLoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizLoginDeleteRequest $request): QuizLoginDeleteResponse
    {
        return new QuizLoginDeleteResponse($this->client->request('/Wl/Quiz/Login/QuizLogin.json', $request->params(), 'DELETE'));
    }
}
