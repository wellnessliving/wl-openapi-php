<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of all available bookables.
 */
class BookableList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves list of all available bookables.
     *
     * @return BookableListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BookableListGetRequest $request): BookableListGetResponse
    {
        return new BookableListGetResponse($this->client->request('/Wl/ClassPass/BookableList.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/BookableList.json.
     *
     * @return BookableListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BookableListPostRequest $request): BookableListPostResponse
    {
        return new BookableListPostResponse($this->client->request('/Wl/ClassPass/BookableList.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return BookableListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BookableListPutRequest $request): BookableListPutResponse
    {
        return new BookableListPutResponse($this->client->request('/Wl/ClassPass/BookableList.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/BookableList.json.
     *
     * @return BookableListPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(BookableListPatchRequest $request): BookableListPatchResponse
    {
        return new BookableListPatchResponse($this->client->request('/Wl/ClassPass/BookableList.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/BookableList.json.
     *
     * @return BookableListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BookableListDeleteRequest $request): BookableListDeleteResponse
    {
        return new BookableListDeleteResponse($this->client->request('/Wl/ClassPass/BookableList.json', $request->params(), 'DELETE'));
    }
}
