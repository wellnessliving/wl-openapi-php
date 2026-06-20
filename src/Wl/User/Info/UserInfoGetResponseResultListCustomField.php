<?php
namespace WlSdk\Wl\User\Info;

class UserInfoGetResponseResultListCustomField
{
    /**
     * Field key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Name of the field. Will be `null` for general fields. Their titles are static.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Value of the field.
     *
     * @var string|null
     */
    public ?string $text_value = null;

    public function __construct(array $data)
    {
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_value = isset($data['text_value']) ? (string)$data['text_value'] : null;
    }
}
