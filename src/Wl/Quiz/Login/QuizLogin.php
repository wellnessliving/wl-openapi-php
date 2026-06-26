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
     * @return QuizLoginPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(QuizLoginPostRequest $request): QuizLoginPostResponse
    {
        return new QuizLoginPostResponse($this->client->request('/Wl/Quiz/Login/QuizLogin.json', $request->params(), 'POST'));
    }

    /**
     * Calls PUT /Wl/Quiz/Login/QuizLogin.json.
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
     * @return QuizLoginDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(QuizLoginDeleteRequest $request): QuizLoginDeleteResponse
    {
        return new QuizLoginDeleteResponse($this->client->request('/Wl/Quiz/Login/QuizLogin.json', $request->params(), 'DELETE'));
    }
}
