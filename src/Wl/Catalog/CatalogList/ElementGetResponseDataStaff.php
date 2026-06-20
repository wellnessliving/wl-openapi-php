<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseDataStaff
{
    /**
     * @deprecated Legacy staff key.  Deprecated, use `uid_staff`.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Staff user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Staff last name.
     *
     * @var string|null
     */
    public ?string $text_family = null;

    /**
     * Staff display name.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->text_family = isset($data['text_family']) ? (string)$data['text_family'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
    }
}
