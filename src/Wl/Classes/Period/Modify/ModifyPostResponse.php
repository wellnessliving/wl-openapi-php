<?php

namespace WlSdk\Wl\Classes\Period\Modify;

/**
 * Response from POST
 */
class ModifyPostResponse
{
    /**
     * The class modify action type. One of the {@link \WlSdk\RsClassModifyModeSid} constants.
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
     * The class ID.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The unique hash string.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function __construct(array $data)
    {
        $this->id_step = isset($data['id_step']) ? (int)$data['id_step'] : null;
        $this->is_back = isset($data['is_back']) ? (bool)$data['is_back'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
    }
}
