<?php
namespace WlSdk\Wl\User\Info;

class UserInfoGetResponseCustomField
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
     * Value of the field. This is the key of the selected item for `select` and `radio` elements.
     *
     * @var string|null
     */
    public ?string $text_value = null;

    /**
     * Title of the selected option for `select` and `radio` elements. Unused for other elements.
     *
     * @var string|null
     */
    public ?string $text_value_title = null;

    public function __construct(array $data)
    {
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_value = isset($data['text_value']) ? (string)$data['text_value'] : null;
        $this->text_value_title = isset($data['text_value_title']) ? (string)$data['text_value_title'] : null;
    }
}
