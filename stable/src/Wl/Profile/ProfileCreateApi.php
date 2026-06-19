<?php
namespace WlSdk\Wl\Profile;

use WlSdk\WlSdkClient;

/**
 * Creates a new client profile with the provided personal details in the specified business.
 */
class ProfileCreateApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * List of intent identifiers. Each element is one of [MemberIntentsSid](#/components/schemas/Wl.Login.Member.Intents.MemberIntentsSid) constants.

Available only for leads added by CAASI agent.
     *
     * @var int[]|null
     */
    public ?array $a_intents = null;

    /**
     * Date of the user's birthday in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_birthday = null;

    /**
     * Gender ID.
One of the [GenderSid](#/components/schemas/Wl.Gender.GenderSid) constants.

`0` if not specified.
     *
     * @var int|null
     */
    public ?int $id_gender = null;

    /**
     * Lead source ID.

One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
`0` if not specified.
     *
     * @var int|null
     */
    public ?int $id_lead_source = null;

    /**
     * Vaccination status ID.

One of the [VaccinationStatusSid](#/components/schemas/Wl.Login.Member.VaccinationStatus.VaccinationStatusSid) constants.

`0` if not specified.
     *
     * @var int|null
     */
    public ?int $id_vaccination_status = null;

    /**
     * `true` means to add user to the legacy lead report.
`false` means to not add user to the legacy lead report.

Note, that this setting does not impact new Lead Management report, which will always include new user.
Also lead capture marketing notification will never be triggered with this endpoint.
     *
     * @var bool|null
     */
    public ?bool $is_lead = null;

    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the lead source.

Empty string if not specified.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /**
     * The key of the home location.
     *
     * @var string|null
     */
    public ?string $k_location_home = null;

    /**
     * The address of the user.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * First name of the user.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * Last name of the user.
     *
     * @var string|null
     */
    public ?string $text_lastname = null;

    /**
     * Email of the user.
Required if `text_phone` not provided.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone of the user.
Required if `text_mail` not provided.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Home phone of the user.
     *
     * @var string|null
     */
    public ?string $text_phone_home = null;

    /**
     * Work phone of the user.
     *
     * @var string|null
     */
    public ?string $text_phone_work = null;

    /**
     * Referrer user key.

Empty string if not specified.
     *
     * @var string|null
     */
    public ?string $uid_referrer = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new client profile with the provided personal details in the specified business.
     *
     * Creates or retrieves a user account by email or phone, saves personal details such as name,
     *  address, phones, birthday, gender, and vaccination status, registers the user in the
     *  business, and optionally adds them to the lead report and sets intents.
     *
     * @return array Parsed JSON response data.
     *   - string uid: The key of the user.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Profile/ProfileCreate.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_intents' => $this->a_intents,
            'dt_birthday' => $this->dt_birthday,
            'id_gender' => $this->id_gender,
            'id_lead_source' => $this->id_lead_source,
            'id_vaccination_status' => $this->id_vaccination_status,
            'is_lead' => $this->is_lead,
            'k_business' => $this->k_business,
            'k_lead_source' => $this->k_lead_source,
            'k_location_home' => $this->k_location_home,
            'text_address' => $this->text_address,
            'text_firstname' => $this->text_firstname,
            'text_lastname' => $this->text_lastname,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            'text_phone_home' => $this->text_phone_home,
            'text_phone_work' => $this->text_phone_work,
            'uid_referrer' => $this->uid_referrer,
            ],
            static fn($v) => $v !== null
        );
    }
}
