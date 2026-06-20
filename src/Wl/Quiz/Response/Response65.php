<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Returns quiz response data including element answers, dates, and access information.
 */
class Response65
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns quiz response data including element answers, dates, and access information.
     *
     * Loads the response for the specified quiz and user, resolving answers, formatted dates, and access flags
     * such as
     * amendment availability and PDF generation support.
     *
     * @return Response65GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Response65GetRequest $request): Response65GetResponse
    {
        return new Response65GetResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'GET'));
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

    /**
     * Validates, updates and reindex response information for associated user.
     *
     * Used to amend an already-submitted response, for example when a business allows clients to
     * edit their quiz answers after submission. Re-links the response to its owner and triggers
     * downstream reindexing so search and reporting stay consistent.
     *
     * @return Response65PutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(Response65PutRequest $request): Response65PutResponse
    {
        return new Response65PutResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the specified quiz response or list of responses for the given business.
     *
     * Validates access privileges and removes the specified response records, updating any related search indexes
     * and activity logs.
     *
     * @return Response65DeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(Response65DeleteRequest $request): Response65DeleteResponse
    {
        return new Response65DeleteResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $request->params(), 'DELETE'));
    }
}
