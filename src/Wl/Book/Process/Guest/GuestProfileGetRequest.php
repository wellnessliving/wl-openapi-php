<?php

namespace WlSdk\Wl\Book\Process\Guest;

class GuestProfileGetRequest
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
     * @var int|null
     * @see \WlSdk\Wl\Service\ServiceSid
     */
    public ?int $id_service = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of service to book.
     * Depending on [GuestProfileApi](/Wl/Book/Process/Guest/GuestProfile.json) value:,
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
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'dl_birthday' => $this->dl_birthday,
            'id_service' => $this->id_service,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'text_first_name' => $this->text_first_name,
            'text_last_name' => $this->text_last_name,
            'text_mail' => $this->text_mail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
