<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetResponseVisit
{
    /**
     * Data for informational card about promotion. Important for the card fields are:
     *
     * @var AttendanceConfirmationScreenGetResponseVisitPayment|null
     */
    public ?AttendanceConfirmationScreenGetResponseVisitPayment $a_payment = null;

    /**
     * Date when promotion ends in user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_expire = null;

    /**
     * If visit not payed yet value is `Not payed`.
     *  If specified visit don't need to be paid value is `Free`. Else title of the promotion.
     *
     * @var string|null
     */
    public ?string $text_payment = null;

    public function __construct(array $data)
    {
        $this->a_payment = isset($data['a_payment']) ? new AttendanceConfirmationScreenGetResponseVisitPayment((array)$data['a_payment']) : null;
        $this->text_expire = isset($data['text_expire']) ? (string)$data['text_expire'] : null;
        $this->text_payment = isset($data['text_payment']) ? (string)$data['text_payment'] : null;
    }
}
