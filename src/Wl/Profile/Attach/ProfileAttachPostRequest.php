<?php

namespace WlSdk\Wl\Profile\Attach;

class ProfileAttachPostRequest
{
    /**
     * Business primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Comments for exists attaches.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var array|null
     */
    public ?array $a_attach_comment = null;

    /**
     * New files for exists attaches.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var array|null
     */
    public ?array $a_attach_file = null;

    /**
     * New names for exists attaches.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var array|null
     */
    public ?array $a_attach_name = null;

    /**
     * Old attaches which must be kept.
     * If this field does not contain an attach, it will be removed with POST.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var array|null
     */
    public ?array $a_attach_save = null;

    /**
     * Comments for new attaches.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var string[]|null
     */
    public ?array $a_new_attach_comment = null;

    /**
     * Files for new attaches.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var array[]|null
     */
    public ?array $a_new_attach_file = null;

    /**
     * Names for new attaches.
     *
     * Strange name for compatibility with old server side.
     *
     * <b>This field is not used directly and described for correct auto generation JavaScript.</b>
     *
     * @var string[]|null
     */
    public ?array $a_new_attach_name = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_attach_comment' => $this->a_attach_comment,
            'a_attach_file' => $this->a_attach_file,
            'a_attach_name' => $this->a_attach_name,
            'a_attach_save' => $this->a_attach_save,
            'a_new_attach_comment' => $this->a_new_attach_comment,
            'a_new_attach_file' => $this->a_new_attach_file,
            'a_new_attach_name' => $this->a_new_attach_name,
            ],
            static fn ($v) => $v !== null
        );
    }
}
