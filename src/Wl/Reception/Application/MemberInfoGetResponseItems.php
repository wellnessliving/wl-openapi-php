<?php

namespace WlSdk\Wl\Reception\Application;

class MemberInfoGetResponseItems
{
    /**
     * ID of color the notice is displayed in.
     * One of {@link \WlSdk\Wl\Reception\Application\MemberInfoColorSid} constants.
     *
     * @var int|null
     */
    public ?int $id_color = null;

    /**
     * ID of icon that accompanies the message.
     * One of {@link \WlSdk\Wl\Reception\Application\MemberInfoIconSid} constants.
     *
     * @var int|null
     */
    public ?int $id_icon = null;

    /**
     * Name of the class for styles.
     *
     * @var string|null
     */
    public ?string $text_class = null;

    /**
     * Plain message for info box.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    /**
     * Message for info box.
     *
     * @var string|null
     */
    public ?string $html_message = null;

    public function __construct(array $data)
    {
        $this->id_color = isset($data['id_color']) ? (int)$data['id_color'] : null;
        $this->id_icon = isset($data['id_icon']) ? (int)$data['id_icon'] : null;
        $this->text_class = isset($data['text_class']) ? (string)$data['text_class'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->html_message = isset($data['html_message']) ? (string)$data['html_message'] : null;
    }
}
