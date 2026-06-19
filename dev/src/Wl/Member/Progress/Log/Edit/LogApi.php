<?php
namespace WlSdk\Wl\Member\Progress\Log\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns progress log data.
 */
class LogApi
{
    /**
     * Progress log local date.
     * 
     * If `null` use the current date.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of fields.
     * 
     * Keys are field IDs ([ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid)
     * constants).
     * Values are new field values.
     * Structure of value completely defined by individual fields.
     *
     * @var int[]|null
     */
    public ?array $a_field_log = null;

    /**
     * Whether field is only weight should be updated.
     *
     * @var bool|null
     */
    public ?bool $is_weight_only = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns progress log data.
     *
     * Loads field values recorded for the specified user on the given date (defaulting to the business's current
     * local date), and also returns the last date the user entered progress data and whether the viewer is staff.
     *
     * @return LogApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LogApiGetResponse
    {
        return new LogApiGetResponse($this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $this->params(), 'GET'));
    }

    /**
     * Saves progress fields log.
     *
     * Validates and persists the field values for the specified user and date, enforcing access
     * rules (clients cannot edit verified entries), and logs the change when data is modified.
     *
     * @return LogApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LogApiPostResponse
    {
        return new LogApiPostResponse($this->client->request('/Wl/Member/Progress/Log/Edit/Log.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_field_log' => $this->a_field_log,
            'is_weight_only' => $this->is_weight_only,
            ],
            static fn($v) => $v !== null
        );
    }
}
