<?php
namespace WlSdk\Wl\Login\Type;

class LoginTypeGetResponseLoginTypeList
{
    /**
     * Client Type ID. One of [ClientTypeSid](#/components/schemas/Wl.Login.Type.ClientTypeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_client_type = null;

    /**
     * Deprecated Use `id_client_type` instead.
     * It will be `1` if the record contains a type of member.
     * It will be `0` if record contains some other type of client.
     * It will be `null` if the record contains some type of prospect.
     *
     * @var bool|null
     */
    public ?bool $is_member = null;

    /**
     * The login type key.
     *
     * @var string|null
     */
    public ?string $k_login_type = null;

    /**
     * The name of the login type.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Same as `s_title` offset.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_client_type = isset($data['id_client_type']) ? (int)$data['id_client_type'] : null;
        $this->is_member = isset($data['is_member']) ? (bool)$data['is_member'] : null;
        $this->k_login_type = isset($data['k_login_type']) ? (string)$data['k_login_type'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
