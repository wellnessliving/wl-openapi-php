<?php
namespace WlSdk\Wl\Login\Member;

class MemberValidate63GetResponseEmptyFieldsRegistration
{
    /**
     * The general field ID. One of {@link \WlSdk\RsFieldGeneralSid} constants.
     *
     * @var int|null
     */
    public ?int $id_field_general = null;

    /**
     * Profile field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Human-readable field title describing what value is missing.
     *
     * @var string|null
     */
    public ?string $text_field_title = null;

    public function __construct(array $data)
    {
        $this->id_field_general = isset($data['id_field_general']) ? (int)$data['id_field_general'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->text_field_title = isset($data['text_field_title']) ? (string)$data['text_field_title'] : null;
    }
}
