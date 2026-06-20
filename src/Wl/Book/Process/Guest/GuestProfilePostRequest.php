<?php
namespace WlSdk\Wl\Book\Process\Guest;

class GuestProfilePostRequest
{
    /**
     * Guest's birthday in MySQL format. Empty if service not restricted by age.
     *
     * @var string|null
     */
    public ?string $dl_birthday = null;

    /**
     * Type of the service to book.
     *
     * @var \WlSdk\Wl\Service\ServiceSid|null
     */
    public ?\WlSdk\Wl\Service\ServiceSid $id_service = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of service to book.
     * Depending on `id_service` value:,
     * <ul>
     *     <li>{@link \WlSdk\Wl\Service\ServiceSid} - class key. </li>
     *     <li>{@link \WlSdk\Wl\Service\ServiceSid} - service key.</li>
     *     <li>{@link \WlSdk\Wl\Service\ServiceSid} - resource key.</li>
     * </ul>
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Guest's first name.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * Guest's last name.
     *
     * @var string|null
     */
    public ?string $text_last_name = null;

    /**
     * Guest's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The mode type used to determine the Lead Source for the created guest.
     * One of the {@link \WlSdk\Wl\Mode\ModeSid} constants. Default is {@link \WlSdk\Wl\Mode\ModeSid}.
     *
     * @var \WlSdk\Wl\Mode\ModeSid|null
     */
    public ?\WlSdk\Wl\Mode\ModeSid $id_mode = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_birthday' => $this->dl_birthday,
            'id_service' => $this->id_service?->value,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'text_first_name' => $this->text_first_name,
            'text_last_name' => $this->text_last_name,
            'text_mail' => $this->text_mail,
            'id_mode' => $this->id_mode?->value,
            ],
            static fn($v) => $v !== null
        );
    }
}
