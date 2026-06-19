<?php
namespace WlSdk\Wl\Book\Process\Guest;

use WlSdk\WlSdkClient;

/**
 * Check if user exists.
 */
class GuestProfileApi
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
     * Depending on `id_service` value:,
     * <ul>
     *     <li>[ServiceSid::CLASSES](#/components/schemas/Wl.Service.ServiceSid) - class key. </li>
     *     <li>[ServiceSid::APPOINTMENT](#/components/schemas/Wl.Service.ServiceSid) - service key.</li>
     *     <li>[ServiceSid::BOOKABLE_ASSET](#/components/schemas/Wl.Service.ServiceSid) - resource key.</li>
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

    /**
     * The mode type used to determine the Lead Source for the created guest.
     * One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants. Default is
     * [ModeSid::API](#/components/schemas/Wl.Mode.ModeSid).
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Check if user exists.
     *
     * Looks up a guest by email within the specified business and service context. Returns the user key if an
     * existing member is found whose email, birthday (when required), and location eligibility all pass
     * validation.
     *
     * @return GuestProfileApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): GuestProfileApiGetResponse
    {
        return new GuestProfileApiGetResponse($this->client->request('/Wl/Book/Process/Guest/GuestProfile.json', $this->params(), 'GET'));
    }

    /**
     * Creates new user.
     *
     * Creates a new guest profile (or reuses an existing non-member account) for the specified business and
     * service,
     * applying birthday and virtual-account rules, and returns the UID of the created or matched user.
     *
     * @return GuestProfileApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): GuestProfileApiPostResponse
    {
        return new GuestProfileApiPostResponse($this->client->request('/Wl/Book/Process/Guest/GuestProfile.json', $this->params(), 'POST'));
    }

    private function params(): array
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
            'id_mode' => $this->id_mode,
            ],
            static fn($v) => $v !== null
        );
    }
}
