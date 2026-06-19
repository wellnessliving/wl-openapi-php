<?php
namespace WlSdk\Wl\Member\Group\GroupList;

use WlSdk\WlSdkClient;

/**
 * Returns all member groups list in the business if `$a_member_group_select` is empty,
 * otherwise filters result according to `$a_member_group_select`.
 */
class ListApi
{
    /**
     * List of groups for filtering groups of business.
     * 
     * `null` in the case when need to return all groups of business.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_select = null;

    /**
     * Whether include "Isaac Churn Risk" group.
     *
     * @var bool|null
     */
    public ?bool $is_churn_risk = null;

    /**
     * Whether include a list of members of groups.
     *
     * @var bool|null
     */
    public ?bool $is_return_members = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of groups in the order in which they will be saved.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_order = null;

    /**
     * List of groups to be deleted.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_delete = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all member groups list in the business if `$a_member_group_select` is empty,
otherwise filters result according to `$a_member_group_select`.
     *
     * If `is_return_members` is `true` includes in the result list of members of each groups.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $this->params(), 'GET'));
    }

    /**
     * Updates the order of groups in a list.
     *
     * Saves the display order of member groups for the business using the positions supplied in
     * `$a_member_group_order`, verifying that all specified group keys belong to the business before writing.
     *
     * @return ListApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): ListApiPutResponse
    {
        return new ListApiPutResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $this->params(), 'PUT'));
    }

    /**
     * Removes groups.
     *
     * Deletes specified groups and associated search templates.
     *
     * @return ListApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): ListApiDeleteResponse
    {
        return new ListApiDeleteResponse($this->client->request('/Wl/Member/Group/GroupList/List.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_member_group_select' => $this->a_member_group_select,
            'is_churn_risk' => $this->is_churn_risk,
            'is_return_members' => $this->is_return_members,
            'k_business' => $this->k_business,
            'a_member_group_order' => $this->a_member_group_order,
            'a_member_group_delete' => $this->a_member_group_delete,
            ],
            static fn($v) => $v !== null
        );
    }
}
