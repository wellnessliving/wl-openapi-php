<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

use WlSdk\WlSdkClient;

/**
 * Retrieve list of folders where the automation can be moved.
 * The list does not contain the folder where the automation is currently located.
 * Also retrieves the title of the automation and the title of the folder where it is currently located.
 */
class FolderMap
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieve list of folders where the automation can be moved.
The list does not contain the folder where the automation is currently located.
Also retrieves the title of the automation and the title of the folder where it is currently located.
     *
     * @return FolderMapGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FolderMapGetRequest $request): FolderMapGetResponse
    {
        return new FolderMapGetResponse($this->client->request('/Wl/Marketing/Automation/Folder/FolderMap.json', $request->params(), 'GET'));
    }

    /**
     * Move the automation to another folder.
If the folder key is empty, the automation will be moved to the default folder.
     *
     * @return FolderMapPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FolderMapPostRequest $request): FolderMapPostResponse
    {
        return new FolderMapPostResponse($this->client->request('/Wl/Marketing/Automation/Folder/FolderMap.json', $request->params(), 'POST'));
    }
}
