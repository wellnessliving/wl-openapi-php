<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Saves a quiz response with the given element answers.
 */
class Response65Post
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves a quiz response with the given element answers.
     *
     * Validates the submitted answers and persists the response record in a transaction. If
     * [QuizResponseApi](/Core/Quiz/QuizResponse.json) is set, only validation runs and no record is created.
     * Pass [QuizResponseApi](/Core/Quiz/QuizResponse.json) to bypass validation for pre-confirmed responses.
     *
     * @return Response65PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(Response65PostRequest $request): Response65PostResponse
    {
        return new Response65PostResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'POST'));
    }
}
