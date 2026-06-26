<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

use WlSdk\WlSdkClient;

/**
 * Get list of folders in the business.
 */
class AutomationFolder
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get list of folders in the business.
     *
     * @return AutomationFolderGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AutomationFolderGetRequest $request): AutomationFolderGetResponse
    {
        return new AutomationFolderGetResponse($this->client->request('/Wl/Marketing/Automation/Folder/AutomationFolder.json', $request->params(), 'GET'));
    }

    /**
     * Create or edit a folder.
     *
     * @return AutomationFolderPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AutomationFolderPostRequest $request): AutomationFolderPostResponse
    {
        return new AutomationFolderPostResponse($this->client->request('/Wl/Marketing/Automation/Folder/AutomationFolder.json', $request->params(), 'POST'));
    }

    /**
     * Delete a folder.
Automations in the folder will be moved to another folder or to the default folder.
     *
     * @return AutomationFolderDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AutomationFolderDeleteRequest $request): AutomationFolderDeleteResponse
    {
        return new AutomationFolderDeleteResponse($this->client->request('/Wl/Marketing/Automation/Folder/AutomationFolder.json', $request->params(), 'DELETE'));
    }
}
