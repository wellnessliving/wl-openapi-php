<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

use WlSdk\WlSdkClient;

/**
 * Gets dashboard contents.
 */
class DashboardManage
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets dashboard contents.
     *
     * @return DashboardManageGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DashboardManageGetRequest $request): DashboardManageGetResponse
    {
        return new DashboardManageGetResponse($this->client->request('/Wl/Report/Dashboard/Manage/DashboardManage.json', $request->params(), 'GET'));
    }

    /**
     * Creates a dashboard.
     *
     * @return DashboardManagePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DashboardManagePostRequest $request): DashboardManagePostResponse
    {
        return new DashboardManagePostResponse($this->client->request('/Wl/Report/Dashboard/Manage/DashboardManage.json', $request->params(), 'POST'));
    }

    /**
     * Updates a dashboard.
     *
     * @return DashboardManagePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(DashboardManagePutRequest $request): DashboardManagePutResponse
    {
        return new DashboardManagePutResponse($this->client->request('/Wl/Report/Dashboard/Manage/DashboardManage.json', $request->params(), 'PUT'));
    }

    /**
     * Deletes dashboard.
     *
     * @return DashboardManageDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(DashboardManageDeleteRequest $request): DashboardManageDeleteResponse
    {
        return new DashboardManageDeleteResponse($this->client->request('/Wl/Report/Dashboard/Manage/DashboardManage.json', $request->params(), 'DELETE'));
    }
}
