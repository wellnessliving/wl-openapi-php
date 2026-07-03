<?php

namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Returns quiz response data including element answers, dates, and access information.
 */
class Response
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
     * @deprecated Use {@link \Wl\Quiz\Response\Response65Api} instead.
     *
     * @return ResponseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResponseGetRequest $request): ResponseGetResponse
    {
        return new ResponseGetResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'GET'));
    }

    /**
     * Saves a quiz response with the given element answers.
     *
     * Validates the submitted answers and persists the response record in a transaction. If
     * QuizResponseApi::$is_validate_only is set, only validation runs and no record is created.
     * Pass QuizResponseApi::$is_skip to bypass validation for pre-confirmed responses.
     *
     * @deprecated Use {@link \Wl\Quiz\Response\Response65Api} instead.
     *
     * @return ResponsePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ResponsePostRequest $request): ResponsePostResponse
    {
        return new ResponsePostResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'POST'));
    }

    /**
     * Validates, updates and reindex response information for associated user.
     *
     * Used to amend an already-submitted response, for example when a business allows clients to
     * edit their quiz answers after submission. Re-links the response to its owner and triggers
     * downstream reindexing so search and reporting stay consistent.
     *
     * @deprecated Use {@link \Wl\Quiz\Response\Response65Api} instead.
     *
     * @return ResponsePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ResponsePutRequest $request): ResponsePutResponse
    {
        return new ResponsePutResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes the specified quiz response or list of responses for the given business.
     *
     * Validates access privileges and removes the specified response records, updating any related search indexes
     * and activity logs.
     *
     * @deprecated Use {@link \Wl\Quiz\Response\Response65Api} instead.
     *
     * @return ResponseDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ResponseDeleteRequest $request): ResponseDeleteResponse
    {
        return new ResponseDeleteResponse($this->client->request('/Wl/Quiz/Response/Response.json', $request->params(), 'DELETE'));
    }
}
