<?php
namespace WlSdk\Core\Passport\Login\Enter;

/**
 * Response from GET
 */
class NotepadGetResponse
{
    /**
     * ID of the datacenter which is a preferred datacenter for the user specified in
     * `s_login`.
     * 
     * One of {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} constants.
     * 
     * If ID of the datacenter returned in this property differs from the current datacenter, this means that this
     * API request was forwarded to the datacenter returned here, and the notepad was created there.
     * So that [EnterApi](/Core/Passport/Login/Enter/Enter.json) must always go to the datacenter specified in this
     * property.
     * 
     * `null` if datacenter preference was not evaluated, or it is not known.
     * In this case, the notepad is created in datacenter where the API request was initially sent.
     *
     * @var \WlSdk\Core\Amazon\Region\AmazonRegionSid|null
     */
    public ?\WlSdk\Core\Amazon\Region\AmazonRegionSid $id_region = null;

    /**
     * The hash type.
     *
     * @var string|null
     */
    public ?string $s_hash = null;

    /**
     * The notepad value, which is used to hash the user's password.
     * The password length is `NONCE_LENGTH` characters.
     *
     * @var string|null
     */
    public ?string $s_notepad = null;

    public function __construct(array $data)
    {
        $this->id_region = isset($data['id_region']) ? \WlSdk\Core\Amazon\Region\AmazonRegionSid::tryFrom((int)$data['id_region']) : null;
        $this->s_hash = isset($data['s_hash']) ? (string)$data['s_hash'] : null;
        $this->s_notepad = isset($data['s_notepad']) ? (string)$data['s_notepad'] : null;
    }
}
