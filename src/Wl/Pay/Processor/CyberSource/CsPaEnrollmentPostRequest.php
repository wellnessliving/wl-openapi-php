<?php

namespace WlSdk\Wl\Pay\Processor\CyberSource;

class CsPaEnrollmentPostRequest
{
    /**
     * User device info:
     *
     * The optional fields go to Cybersource only when the device data collection did not complete. A value that
     * does not
     * suit them is not sent to Cybersource, and does not fail the request.
     *
     * @var array|null
     */
    public ?array $a_device_info = null;

    /**
     * Key of payment transaction that was previously created with {@link
     * \WlSdk\Thoth\PayProcessor\CyberSource\CsPaSetup}.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * How the device data collection ended: the message of its frame as it was received, or `timeout` if the frame
     * did
     * not answer in the time that the page waits for it.
     *
     * The check of the enrollment goes on in any case. It has no validators: no message of the frame can stop a
     * payment.
     *
     * `null` if the client does not report it: a widget, or a page opened before this field appeared.
     *
     * @var string|null
     */
    public ?string $s_collection = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_device_info' => $this->a_device_info,
            'k_pay_transaction' => $this->k_pay_transaction,
            's_collection' => $this->s_collection,
            ],
            static fn ($v) => $v !== null
        );
    }
}
