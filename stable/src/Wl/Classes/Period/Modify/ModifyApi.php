<?php
namespace WlSdk\Wl\Classes\Period\Modify;

use WlSdk\WlSdkClient;

/**
 * Gets data for step in wizard.
 */
class ModifyApi
{
    /**
     * The end date, returned in MySQL format and the local time.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date, returned in MySQL format and the local time.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * The class modify step type. One of the [RsClassModifyActionSid](#/components/schemas/RsClassModifyActionSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_class_modify_action = null;

    /**
     * The modify mode type. One of the [RsClassModifyModeSid](#/components/schemas/RsClassModifyModeSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_class_modify_mode = null;

    /**
     * The class modify action type. One of the [RsClassModifyModeSid](#/components/schemas/RsClassModifyModeSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_step = null;

    /**
     * The step direction.
     * 
     * `true` - step forward.
     * 
     * `false` - step back.
     * 
     * After each step, this variable sets to the default position.
     * By default, the step direction is forward.
     *
     * @var bool|null
     */
    public ?bool $is_back = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     * 
     * This will be empty if not set yet.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The unique hash string.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_set = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data for step in wizard.
     *
     * Used by the class modification wizard (edit, cancel, reschedule) to load the data for a specific
     * wizard step. Each step has a different data shape driven by `id_step`; the response feeds directly
     * into the step's form.
     *
     * @return ModifyApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ModifyApiGetResponse
    {
        return new ModifyApiGetResponse($this->client->request('/Wl/Classes/Period/Modify/Modify.json', $this->params(), 'GET'));
    }

    /**
     * Makes step in wizard.
     *
     * Used by the class modification wizard to submit a completed step and advance to the next. The wizard
     * tracks state server-side; this call validates the step input, persists it, and returns the next step
     * the UI should render.
     *
     * @return ModifyApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ModifyApiPostResponse
    {
        return new ModifyApiPostResponse($this->client->request('/Wl/Classes/Period/Modify/Modify.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'id_class_modify_action' => $this->id_class_modify_action,
            'id_class_modify_mode' => $this->id_class_modify_mode,
            'id_step' => $this->id_step,
            'is_back' => $this->is_back,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            's_id' => $this->s_id,
            'id_mode' => $this->id_mode,
            'a_set' => $this->a_set,
            ],
            static fn($v) => $v !== null
        );
    }
}
