<?php
namespace WlSdk\Wl\Member\Progress\Field;

use WlSdk\WlSdkClient;

/**
 * Changes states of field.
 */
class State
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes states of field.
     *
     * Updates one or more state flags (`is_active`, `is_public`, `is_require`, `is_require_staff`) for the
     * specified
     * progress field and returns the new values. At least one flag must be provided; the field must be active to
     * change its required state.
     *
     * @return StatePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(StatePutRequest $request): StatePutResponse
    {
        return new StatePutResponse($this->client->request('/Wl/Member/Progress/Field/State.json', $request->params(), 'PUT'));
    }
}
