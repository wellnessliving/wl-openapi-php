<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Saves a quiz response with the given element answers.
 *
 * @deprecated
 */
class ResponsePost
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
     * @return ResponsePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResponsePostRequest $request): ResponsePostResponse
    {
        return new ResponsePostResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'POST'));
    }
}
