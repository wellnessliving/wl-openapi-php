<?php

namespace WlSdk\Core\Prg\ClearPublic;

use WlSdk\WlSdkClient;

/**
 * Recursively deletes all files and subdirectories from public html except for the following:
 * Keeps files in these directories:
 * *  public html
 * *  public html/a
 * *  public html/static
 */
class ClearPublic
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Recursively deletes all files and subdirectories from public html except for the following:
Keeps files in these directories:
*  public html
*  public html/a
*  public html/static
     *
     * Does not recurse into these directories:
     * *  public html/a/drive*
     *
     * @return ClearPublicPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClearPublicPostRequest $request): ClearPublicPostResponse
    {
        return new ClearPublicPostResponse($this->client->request('/Core/Prg/ClearPublic/ClearPublic.json', $request->params(), 'POST'));
    }
}
