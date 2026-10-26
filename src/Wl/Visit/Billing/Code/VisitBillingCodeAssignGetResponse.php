<?php

namespace WlSdk\Wl\Visit\Billing\Code;

/**
 * Response from GET
 */
class VisitBillingCodeAssignGetResponse
{
    /**
     * Billing codes applied to the visit, the diagnostic codes first, each type sorted by the code value.
     *
     * A staff member who can not assign billing codes gets the custom codes only: the diagnostic codes are a part
     * of
     * the medical record of the client. The codes are changed by posting {@link
     * \WlSdk\Wl\Visit\Billing\Code\VisitBillingCodeAssign}.
     *
     * @var VisitBillingCodeAssignGetResponseCode[]|null
     */
    public ?array $a_code = null;

    /**
     * History of the changes of the billing codes of the visit, the latest change first: a record per added or
     * removed
     * code, per "Codes applied by default" batch, per "Signed & locked billing codes" lock and per void of the
     * codes
     * on a cancel or a no-show.
     *
     * Empty for a staff member who can not assign billing codes.
     *
     * @var VisitBillingCodeAssignGetResponseHistory[]|null
     */
    public ?array $a_history = null;

    /**
     * Voided billing codes of the visit.
     *
     * A visit gets voided codes when it is cancelled, late-cancelled or marked as a no-show: the codes are kept
     * for
     * the record but become read-only. The slide-out of the appointment shows them in a separate read-only
     * section.
     * A staff member who can not assign billing codes gets the voided custom codes only.
     * Empty while the visit has no voided codes, and empty while the visit is live: if a cancelled visit is
     * restored,
     * its voided codes stay in the database but are not returned any more, the history has the record of the
     * voiding.
     *
     * @var VisitBillingCodeAssignGetResponseVoid[]|null
     */
    public ?array $a_void = null;

    /**
     * Date and time the diagnostic codes of the visit were locked, in UTC.
     * `null` when the diagnostic codes are not locked.
     *
     * @var string|null
     */
    public ?string $dtu_lock = null;

    /**
     * `true` when the diagnostic codes of the visit are locked by a staff member who signed, `false` otherwise.
     *
     * A locked save that adds or removes any code requires a short reason, and a save that adds or removes a
     * diagnostic code requires a new signature, which re-locks the codes under the new signer.
     *
     * @var bool|null
     */
    public ?bool $is_locked = null;

    /**
     * `true` when a receipt for this visit has been generated at least once.
     *
     * While it is `true`, a save that adds or removes any code requires a short reason.
     *
     * @var bool|null
     */
    public ?bool $is_receipt_sent = null;

    /**
     * `true` if the business requires a signature when diagnostic codes of a visit are saved, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_signature = null;

    /**
     * `true` if the business has the diagnostic codes turned on, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_system = null;

    /**
     * Version of the billing codes of the visit: a value that changes every time the codes of the visit change.
     *
     * The version comes with the codes and must be posted back together with them. A post that carries an outdated
     * version is rejected with the error `code-version-outdated`, so that the codes another staff member has
     * changed
     * in the meantime are not overwritten without being seen. The answer of a successful post carries the new
     * version,
     * so the codes can be changed again without reading them anew.
     *
     * Empty string if the codes of the visit have never been changed.
     *
     * @var string|null
     */
    public ?string $s_version = null;

    /**
     * Full name of the staff member who signed and locked the diagnostic codes of the visit, as it is at the
     * moment
     * of the request.
     *
     * `null` when the diagnostic codes are not locked or when the user is deleted; the lock itself stays, so the
     * diagnostic codes are kept frozen.
     *
     * @var string|null
     */
    public ?string $text_staff_name_lock = null;

    /**
     * Key of the staff member who signed and locked the diagnostic codes of the visit.
     *
     * `null` when the diagnostic codes are not locked or when the user is deleted.
     *
     * @var string|null
     */
    public ?string $uid_staff_lock = null;

    public function __construct(array $data)
    {
        $this->a_code = isset($data['a_code']) ? array_map(static fn ($item) => new VisitBillingCodeAssignGetResponseCode((array)$item), (array)$data['a_code']) : null;
        $this->a_history = isset($data['a_history']) ? array_map(static fn ($item) => new VisitBillingCodeAssignGetResponseHistory((array)$item), (array)$data['a_history']) : null;
        $this->a_void = isset($data['a_void']) ? array_map(static fn ($item) => new VisitBillingCodeAssignGetResponseVoid((array)$item), (array)$data['a_void']) : null;
        $this->dtu_lock = isset($data['dtu_lock']) ? (string)$data['dtu_lock'] : null;
        $this->is_locked = isset($data['is_locked']) ? (bool)$data['is_locked'] : null;
        $this->is_receipt_sent = isset($data['is_receipt_sent']) ? (bool)$data['is_receipt_sent'] : null;
        $this->is_signature = isset($data['is_signature']) ? (bool)$data['is_signature'] : null;
        $this->is_system = isset($data['is_system']) ? (bool)$data['is_system'] : null;
        $this->s_version = isset($data['s_version']) ? (string)$data['s_version'] : null;
        $this->text_staff_name_lock = isset($data['text_staff_name_lock']) ? (string)$data['text_staff_name_lock'] : null;
        $this->uid_staff_lock = isset($data['uid_staff_lock']) ? (string)$data['uid_staff_lock'] : null;
    }
}
