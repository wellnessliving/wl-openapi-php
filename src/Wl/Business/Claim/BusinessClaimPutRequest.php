<?php
namespace WlSdk\Wl\Business\Claim;

class BusinessClaimPutRequest
{
    /**
     * The Self-Setup wizard form data to be saved in the business claim log.
     * 
     * The structure is conditionally arbitrary and is used only for logging purposes.
     * No specific keys are required or validated.
     *
     * @var string[]|null
     */
    public ?array $a_form = null;

    /**
     * The key of the business to be verified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_form' => $this->a_form,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
