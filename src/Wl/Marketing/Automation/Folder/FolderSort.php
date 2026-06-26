<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

use WlSdk\WlSdkClient;

/**
 * Change the order of folders.
 */
class FolderSort
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Change the order of folders.
     *
     * @return FolderSortPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FolderSortPostRequest $request): FolderSortPostResponse
    {
        return new FolderSortPostResponse($this->client->request('/Wl/Marketing/Automation/Folder/FolderSort.json', $request->params(), 'POST'));
    }
}
