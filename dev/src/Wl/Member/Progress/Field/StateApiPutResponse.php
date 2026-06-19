<?php
namespace WlSdk\Wl\Member\Progress\Field;

/**
 * Response from PUT
 */
class StateApiPutResponse
{
    /**
     * Field ID. One of the [ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid)
     * constant.
     *
     * @var int|null
     */
    public ?int $id_field = null;

    /**
     * Whether field is active and should be displayed on page.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this field is public. If this field is set to `false`, this field is not visible to clients.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * Whether field value is required for clients.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Whether field value is required for staffs.
     *
     * @var bool|null
     */
    public ?bool $is_require_staff = null;

    /**
     * Field title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_field = isset($data['id_field']) ? (int)$data['id_field'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_public = isset($data['is_public']) ? (bool)$data['is_public'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->is_require_staff = isset($data['is_require_staff']) ? (bool)$data['is_require_staff'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
