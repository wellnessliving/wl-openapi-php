<?php
namespace WlSdk\Wl\Staff\StaffView;

class StaffViewGetResponseResultListStaffPhoto
{
    /**
     * Image data.
     *
     * @var StaffViewGetResponseResultListStaffPhotoImage|null
     */
    public ?StaffViewGetResponseResultListStaffPhotoImage $a_image = null;

    /**
     * Height of image.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Width of image.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * One of {@link \WlSdk\Wl\Gender\GenderSid}.
     *
     * @var \WlSdk\Wl\Gender\GenderSid|null
     */
    public ?\WlSdk\Wl\Gender\GenderSid $id_gender = null;

    /**
     * Whether is empty.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * Staff key.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Path to image.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new StaffViewGetResponseResultListStaffPhotoImage((array)$data['a_image']) : null;
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->id_gender = isset($data['id_gender']) ? \WlSdk\Wl\Gender\GenderSid::tryFrom((int)$data['id_gender']) : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
