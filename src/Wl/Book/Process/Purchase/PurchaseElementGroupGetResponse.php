<?php
namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class PurchaseElementGroupGetResponse
{
    /**
     * A list of taxes for the given purchase options.
     * Keys - tax keys, values - tax amounts.
     *
     * @var string[]|null
     */
    public ?array $a_tax = null;

    /**
     * The total cost of the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    /**
     * The amount of the whole discount for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The discount amount provided by a discount code for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_discount_code = null;

    /**
     * The discount amount for the client type for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * The price of the given purchase options (with or without taxes, depending on regional standards).
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The amount of subtotal for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * The amount of taxes for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    public function __construct(array $data)
    {
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_code = isset($data['m_discount_code']) ? (string)$data['m_discount_code'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
    }
}
