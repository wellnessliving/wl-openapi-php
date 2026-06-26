<?php

namespace WlSdk\Core\Quiz;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Core/Quiz/QuizResponse.json
 */
class QuizResponse
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Core/Quiz/QuizResponse.json.
     *
     * @return QuizResponseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QuizResponseGetRequest $request): QuizResponseGetResponse
    {
        return new QuizResponseGetResponse($this->client->request('/Core/Quiz/QuizResponse.json', $request->params(), 'GET'));
    }

    /**
     * Saves a quiz response with the given element answers.
     *
     * Validates the submitted answers and persists the response record in a transaction. If
     * `is_validate_only` is set, only validation runs and no record is created.
     * Pass `is_skip` to bypass validation for pre-confirmed responses.
     *
     * @return QuizResponsePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizResponsePostRequest $request): QuizResponsePostResponse
    {
        return new QuizResponsePostResponse($this->client->request('/Core/Quiz/QuizResponse.json', $request->params(), 'POST'));
    }

    /**
     * Validates, updates and reindex response information for associated user.
     *
     * Used to amend an already-submitted response, for example when a business allows clients to
     * edit their quiz answers after submission. Re-links the response to its owner and triggers
     * downstream reindexing so search and reporting stay consistent.
     *
     * @return QuizResponsePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(QuizResponsePutRequest $request): QuizResponsePutResponse
    {
        return new QuizResponsePutResponse($this->client->request('/Core/Quiz/QuizResponse.json', $request->params(), 'PUT'));
    }

    /**
     * Calls DELETE /Core/Quiz/QuizResponse.json.
     *
     * @return QuizResponseDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizResponseDeleteRequest $request): QuizResponseDeleteResponse
    {
        return new QuizResponseDeleteResponse($this->client->request('/Core/Quiz/QuizResponse.json', $request->params(), 'DELETE'));
    }
}
