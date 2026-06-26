<?php

namespace WlSdk\Wl\Reception\Roster\Search;

/**
 * Response from GET
 */
class SearchGetResponse
{
    /**
     * List of user information. Each element is array with next structure:
     *
     * @var SearchGetResponseUser|null
     */
    public ?SearchGetResponseUser $a_user = null;

    /**
     * Number of the request. Is required to ignore old requests, when new request was already done.
     *
     * @var int|null
     */
    public ?int $i_request = null;

    public function __construct(array $data)
    {
        $this->a_user = isset($data['a_user']) ? new SearchGetResponseUser((array)$data['a_user']) : null;
        $this->i_request = isset($data['i_request']) ? (int)$data['i_request'] : null;
    }
}
