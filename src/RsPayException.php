<?php

namespace WlSdk;

/**
 * An exception that is thrown in a case of a payment error.
 *
 * Last used ID: 165.
 *
 * Values:
 * - 58 (`ABAN_EMPTY`): Invalid ABA number chosen.
 * - 57 (`ABAN_INVALID`): Invalid ABA number chosen.
 * - 160 (`ACCESS_AUTHENTICATE`): User Authentication Failed.
 *
 *   Gateway rejected username and/or password.
 * - 181 (`ACCESS_TOKEN_INVALID`): Authentication token is not valid.
 * - 63 (`ACCOUNT_ENTRY_EMPTY`): Account payment entry method is empty.
 * - 64 (`ACCOUNT_HOLDER_EMPTY`): Account holder type is empty.
 * - 59 (`ACCOUNT_NAME_EMPTY`): Account name is empty.
 * - 60 (`ACCOUNT_NAME_LONG`): Account name is too long.
 * - 61 (`ACCOUNT_NUMBER_EMPTY`): Account number is empty.
 * - 67 (`ACCOUNT_NUMBER_INVALID`): Account number invalid.
 * - 62 (`ACCOUNT_NUMBER_LONG`): Account number is too long.
 * - 66 (`ACCOUNT_NUMBER_SHORT`): Account number is too short.
 * - 69 (`ACCOUNT_OWNER_EMPTY`): Account owner is empty.
 * - 70 (`ACCOUNT_OWNER_LONG`): Account name is too long.
 * - 182 (`ACCOUNT_OWNER_DOES_NOT_MATCH`): Account owner name does not equal billing name.
 * - 65 (`ACCOUNT_TYPE_EMPTY`): Account type is empty.
 * - 198 (`ACH_E02`): ACH: Account Closed.
 * - 199 (`ACH_E03`): ACH: No Account / Unable to Locate Account.
 * - 200 (`ACH_E04`): ACH: Invalid Account Number.
 * - 201 (`ACH_E05`): ACH: Unauthorized Debit to Consumer Account Using Corporate SEC Code.
 * - 202 (`ACH_E07`): ACH: Authorization Revoked by Customer.
 * - 203 (`ACH_E08`): ACH: Payment Stopped.
 * - 204 (`ACH_E10`): ACH: Customer Advises Originator Not Known / Not Authorized.
 * - 205 (`ACH_E11`): ACH: Customer Advises Entry Not in Accordance with Authorization.
 * - 206 (`ACH_E13`): ACH: RDFI Not Qualified to Participate.
 * - 207 (`ACH_E14`): ACH: Representative Payee Deceased or Unable to Continue.
 * - 208 (`ACH_E15`): ACH: Beneficiary or Account Holder Deceased.
 * - 209 (`ACH_E16`): ACH: Account Frozen.
 * - 210 (`ACH_E17`): ACH: Invalid Account Number under Questionable Circumstances.
 * - 211 (`ACH_E20`): ACH: Non-Transaction Account.
 * - 212 (`ACH_E29`): ACH: Corporate Customer Advises Not Authorized.
 * - 213 (`ACH_E92`): ACH: Invalid Image.
 * - 214 (`ACH_E93`): ACH: Non-Negotiable.
 * - 215 (`ACH_E95`): ACH: Breach of Warranty.
 * - 216 (`ACH_E96`): ACH: Counterfeit / Forgery.
 * - 217 (`ACH_E97`): ACH: Refer to Maker.
 * - 124 (`ACH_R01`): Insufficient funds.
 *
 *   Available balance is not sufficient to cover the amount of the debit entry.
 * - 125 (`ACH_R02`): Bank account closed.
 *
 *   Previously active account has been closed by the customer of RDFI.
 * - 126 (`ACH_R03`): No bank account/unable to locate account.
 *
 *   Account number does not correspond to the individual identified in the entry, or the account number designated is
 *   not an open account.
 * - 127 (`ACH_R04`): Invalid bank account number.
 *
 *   Account number structure is not valid.
 * - 128 (`ACH_R05`): Unauthorized Debit to Consumer Account Using Corporate SEC Code.
 * - 129 (`ACH_R06`): Returned per ODFI request.
 *
 *   ODFI requested the RDFI to return the entry.
 * - 130 (`ACH_R07`): Authorization revoked by customer.
 *
 *   Receiver has revoked authorization.
 * - 131 (`ACH_R08`): Payment stopped.
 *
 *   Receiver of a recurring debit has stopped payment of an entry.
 * - 132 (`ACH_R09`): Uncollected funds.
 *
 *   Collected funds are not sufficient for payment of the debit entry.
 * - 133 (`ACH_R10`): Customer advises not authorized.
 *
 *   Receiver has advised RDFI that originator is not authorized to debit his bank account.
 * - 134 (`ACH_R11`): Check truncation entry return.
 *
 *   To be used when returning a check truncation entry.
 * - 135 (`ACH_R12`): Branch sold to another RDFI.
 *
 *   RDFI unable to post entry destined for a bank account maintained at a branch sold to another financial
 * institution.
 * - 136 (`ACH_R13`): RDFI not qualified to participate.
 *
 *   Financial institution does not receive commercial ACH entries.
 * - 137 (`ACH_R14`): Representative payee deceased or unable to continue in that capacity.
 *
 *   The representative payee authorized to accept entries on behalf of a beneficiary is either deceased or unable to
 *   continue in that capacity.
 * - 138 (`ACH_R15`): Beneficiary or bank account holder.
 *
 *   (Other than representative payee) deceased* - (1) the beneficiary entitled to payments is deceased or (2) the bank
 *   account holder other than a representative payee is deceased.
 * - 139 (`ACH_R16`): Bank account frozen.
 *
 *   Funds in bank account are unavailable due to action by RDFI or legal order.
 * - 140 (`ACH_R17`): File record edit criteria.
 *
 *   Fields rejected by RDFI processing (identified in return addenda).
 * - 141 (`ACH_R18`): Improper effective entry date.
 *
 *   Entries have been presented prior to the first available processing window for the effective date.
 * - 142 (`ACH_R19`): Amount field error.
 *
 *   Improper formatting of the amount field.
 * - 143 (`ACH_R20`): Non-payment bank account.
 *
 *   Entry destined for non-payment bank account defined by reg.
 * - 144 (`ACH_R21`): Invalid company ID number.
 *
 *   The company ID information not valid (normally CIE entries).
 * - 145 (`ACH_R22`): Invalid individual ID number.
 *
 *   Individual ID used by receiver is incorrect (CIE entries).
 * - 146 (`ACH_R23`): Credit entry refused by receiver.
 *
 *   Receiver returned entry because minimum or exact amount not remitted, bank account is subject to litigation, or
 *   payment represents an overpayment, originator is not known to receiver or receiver has not authorized this credit
 *   entry to this bank account.
 * - 147 (`ACH_R24`): Duplicate entry.
 *
 *   RDFI has received a duplicate entry.
 * - 148 (`ACH_R25`): Addenda error.
 *
 *   Improper formatting of the addenda record information.
 * - 149 (`ACH_R26`): Mandatory field error.
 *
 *   Improper information in one of the mandatory fields.
 * - 150 (`ACH_R27`): Trace number error.
 *
 *   Original entry trace number is not valid for return entry; or addenda trace numbers do not correspond with entry
 *   detail record.
 * - 151 (`ACH_R28`): Transit routing number check digit error.
 *
 *   Check digit for the transit routing number is incorrect.
 * - 152 (`ACH_R29`): Corporate customer advises not authorized.
 *
 *   RDFI has been notified by corporate receiver that debit entry of originator is not authorized.
 * - 153 (`ACH_R30`): RDFI not participant in check truncation program.
 *
 *   Financial institution not participating in automated check safekeeping application.
 * - 154 (`ACH_R31`): Permissible return entry (CCD and CTX only).
 *
 *   RDFI has been notified by the ODFI that it agrees to accept a CCD or CTX return entry.
 * - 155 (`ACH_R32`): RDFI non-settlement.
 *
 *   RDFI is not able to settle the entry.
 * - 156 (`ACH_R33`): Return of XCK entry.
 *
 *   RDFI determines at its sole discretion to return an XCK entry; an XCK return entry may be initiated by midnight of
 *   the sixtieth day following the settlement date if the XCK entry.
 * - 157 (`ACH_R34`): Limited participation RDFI.
 *
 *   RDFI participation has been limited by a federal or state supervisor.
 * - 158 (`ACH_R35`): Return of improper debit entry.
 *
 *   ACH debit not permitted for use with the CIE standard entry class code (except for reversals).
 * - 218 (`ACH_R36`): ACH: Return of Improper Credit Entry.
 * - 219 (`ACH_R37`): ACH: Source Document Presented for Payment.
 * - 220 (`ACH_R38`): ACH: Stop Payment on Source Document.
 * - 221 (`ACH_R39`): ACH: Improper Source Document.
 * - 222 (`ACH_R40`): ACH: Return of ENR Entry by Federal Government Agency.
 * - 223 (`ACH_R41`): ACH: Invalid Transaction Code.
 * - 224 (`ACH_R42`): ACH: Routing Number / Check Digit Error.
 * - 225 (`ACH_R43`): ACH: Invalid DFI Account Number.
 * - 226 (`ACH_R44`): ACH: Invalid Individual ID Number / Identification.
 * - 227 (`ACH_R45`): ACH: Invalid Individual Name / Company Name.
 * - 228 (`ACH_R46`): ACH: Invalid Representative Payee Indicator.
 * - 229 (`ACH_R47`): ACH: Duplicate Enrollment.
 * - 230 (`ACH_R50`): ACH: State Law Affecting RCK Acceptance.
 * - 231 (`ACH_R51`): ACH: Item is Ineligible, Notice Not Provided, etc.
 * - 232 (`ACH_R52`): ACH: Stop Payment on Item (Adjustment Entries).
 * - 233 (`ACH_R53`): ACH: Item and ACH Entry Presented for Payment.
 * - 234 (`ACH_R61`): ACH: Misrouted Return.
 * - 235 (`ACH_R62`): ACH: Incorrect Trace Number.
 * - 236 (`ACH_R63`): ACH: Incorrect Dollar Amount.
 * - 237 (`ACH_R64`): ACH: Incorrect Individual Identification.
 * - 238 (`ACH_R65`): ACH: Incorrect Transaction Code.
 * - 239 (`ACH_R66`): ACH: Incorrect Company Identification.
 * - 240 (`ACH_R67`): ACH: Duplicate Return.
 * - 241 (`ACH_R68`): ACH: Untimely Return.
 * - 242 (`ACH_R69`): ACH: Multiple Errors.
 * - 243 (`ACH_R70`): ACH: Permissible Return Entry Not Accepted.
 * - 244 (`ACH_R71`): ACH: Misrouted Dishonored Return.
 * - 245 (`ACH_R72`): ACH: Untimely Dishonored Return.
 * - 246 (`ACH_R73`): ACH: Timely Original Return.
 * - 247 (`ACH_R74`): ACH: Corrected Return.
 * - 248 (`ACH_R75`): ACH: Return Not a Duplicate.
 * - 249 (`ACH_R76`): ACH: No Errors Found.
 * - 250 (`ACH_R80`): ACH: IAT Entry Coding Error.
 * - 251 (`ACH_R81`): ACH: Non-Participant in IAT Program.
 * - 252 (`ACH_R82`): ACH: Invalid Foreign Receiving DFI Identification.
 * - 253 (`ACH_R83`): ACH: Foreign Receiving DFI Unable to Settle.
 * - 254 (`ACH_R84`): ACH: Entry Not Processed by Gateway.
 * - 255 (`ACH_R85`): ACH: Incorrectly Coded Outbound International Payment.
 * - 185 (`ACH_ACCOUNT_TYPE`): ACH check type or account type is invalid.
 * - 105 (`ACH_SUPPORT`): ACH payment method is not supported by processor.
 * - 123 (`ACH_UNCOLLECTED`): ACH error: uncollected.
 * - 39 (`ADDRESS_INVALID`): Invalid payment address chosen.
 * - 40 (`ADDRESS_NX`): Chosen payment address does not exist.
 * - 176 (`AGREEMENT_DISAGREE`): Disagreement with the Payment Agreement.
 * - 35 (`AMOUNT_CONSOLIDATE`): Sum of amounts for all individual payment sources does not equal the total expected
 * amount.
 * - 191 (`AMOUNT_CONSOLIDATE_PACKAGE`): Total package price can't be divided equally between package items without
 * loosing cents.
 *   The calculated amount of one of item in the package has more than two digits after the decimal point in result.
 * - 179 (`AMOUNT_CHANGE`): Amount was unexpectedly changed during the purchase process.
 *   This means that `rs_pay_transaction` amount and pay processor transaction amount differs.
 * - 34 (`AMOUNT_INVALID`): Amount is invalid.
 * - 75 (`AMOUNT_TOTAL`): Total price of cart greater than `1000000000.00`.
 * - 32 (`AMOUNT_ZERO`): Amount equals zero.
 * - 14 (`AVS`): AVS verification failed. Postal code or address are invalid.
 * - 79 (`BANK_ACCOUNT_INVALID`): Invalid bank account ID.
 * - 80 (`BANK_ACCOUNT_NX`): Bank account ID does not exist.
 * - 77 (`BSB_EMPTY`): Bank state branch is empty.
 * - 78 (`BSB_INVALID`): Bank state branch is invalid.
 * - 173 (`BUSINESS_CHURN`): This business is a lost customer.
 * - 17 (`CALL`): Client must call issuer for further information.
 * - 5 (`CARD_DECLINE`): Card data is valid, but you can not pay with it (e.g. hold placed on card).
 * - 42 (`CARD_INVALID`): Invalid payment card chosen.
 * - 73 (`CARD_LIMIT`): Card over limit.
 * - 46 (`CARD_NAME_EMPTY`): Payment card nickname is empty.
 * - 47 (`CARD_NAME_LONG`): Payment card nickname is too long.
 * - 71 (`CARD_NOT_HONOR`): The customer’s bank has declined the transaction as the credit card number has failed a
 * security check, or the
 *   funds have been frozen or depleted. The customer should use an alternate credit card.
 * - 72 (`CARD_NSF`): Insufficient funds available.
 * - 43 (`CARD_NX`): Chosen payment card does not exist.
 * - 44 (`CARD_SELECT`): User has chosen payment card but he had no such rights.
 * - 184 (`CARD_ISSUER_INVALID`): No such card issuer.
 * - 190 (`CARD_UNSUPPORTED`): Card unsupported.
 * - 177 (`CANCELED`): Element which should be paid with this payment has been canceled and payment should be blocked.
 * - 99 (`COMMENT_LONG`): Comment for payment method too long.
 *
 *   The maximum length of comment string is `1024` characters.
 * - 8 (`CONNECT`): Can't connect to payment gateway.
 * - 164 (`COUNTRY_UNSUPPORTED`): Unsupported country.
 * - 55 (`COUPON_BUSINESS`): Gift card belongs to a foreign business.
 * - 54 (`COUPON_CURRENCY`): Invalid payment card chosen.
 * - 97 (`COUPON_INACTIVE`): Coupon is inactive.
 * - 51 (`COUPON_INVALID`): Coupon code is invalid (invalid length, or invalid characters encountered).
 * - 52 (`COUPON_NX`): Invalid payment card chosen.
 * - 53 (`COUPON_REDEEM`): Coupon is redeemed already.
 * - 76 (`CREDENTIAL_SUPPORT`): Card credentials (number, csc, month, year) change ability is disabled. E.g. payment
 * processor may not support
 *   money authorization, so we can not change card credentials.
 * - 21 (`CSC_EMPTY`): Invalid card security code (CSC).
 * - 2 (`CSC_INVALID`): Invalid card security code (CSC).
 * - 24 (`DATE_EXPIRE`): Card is expired.
 * - 163 (`DATE_INACTIVE`): Card is inactive.
 * - 183 (`DATE_INVALID`): Invalid Expiration Date.
 * - 22 (`DATE_MONTH`): Month is invalid.
 * - 23 (`DATE_YEAR`): Multiple usage of this payment method is not allowed.
 * - 1 (`DUPLICATE`): Duplicate transaction. Transaction data that is selected for comparison is payment
 * gateway-specific.
 * - 168 (`FRAUD`): Error, caused by one of the following cases:
 *   - fraud
 *   - card is lost
 *   - card is stolen
 * - 196 (`HARDWARE_NOT_FOUND`): Terminal that should be used for payment is not found.
 * - 9 (`INFO_EMPTY`): Informational field is not filled in.
 * - 41 (`INFO_LONG`): Informational field is too long.
 * - 93 (`INSTALLMENT_AMOUNT_MIN`): Minimum payment amount is less then `1`.
 * - 85 (`INSTALLMENT_COUNT_FORMAT`): Installment plan: Number of payment is invalid.
 * - 87 (`INSTALLMENT_COUNT_MAX`): Installment plan: Number of payment is too large.
 * - 86 (`INSTALLMENT_COUNT_MIN`): Installment plan: Number of payment is too small (less then 2).
 * - 81 (`INSTALLMENT_DATE_EMPTY`): Installment date is not specified.
 * - 82 (`INSTALLMENT_DATE_FORMAT`): Installment date format is invalid.
 * - 84 (`INSTALLMENT_DATE_FUTURE`): Installment date is too deep in the future.
 * - 83 (`INSTALLMENT_DATE_PAST`): Installment date is in the past (minimum is today).
 * - 91 (`INSTALLMENT_DURATION_DISABLE`): Installment plan: Duration of a period is not allowed.
 * - 92 (`INSTALLMENT_DURATION_MAX`): Installment plan: Maximum total duration of installment plan is 100 years.
 * - 90 (`INSTALLMENT_DURATION_NX`): Installment plan: Duration of a period does not exist.
 * - 88 (`INSTALLMENT_PERIOD_FORMAT`): Installment plan: Number of periods between two consecutive payments is invalid.
 * - 89 (`INSTALLMENT_PERIOD_MAX`): Installment plan: Number of periods between two consecutive payments is too large.
 * - 95 (`INSTALLMENT_TEMPLATE_EMPTY`): Template of installment plans: template is not selected.
 * - 94 (`INSTALLMENT_TEMPLATE_NX`): Template of installment plans: ID of the template does not exist.
 * - 33 (`INTERNAL_BROWSER`): Internal errors that occurred in the browser (for example, some form data arrived to
 * servers such that user should
 *   not be able to enter it in the form).
 *
 *   Differs from INTERNAL_SERVER in that errors of this type are not logged into error.log.
 * - 192 (`INTERNAL_HIT`): Security throttling error.
 *
 *   It is shown as `internal-hit` to the user to make it harder to guess what does this error mean.
 * - 186 (`INTERNAL_MERCHANT`): Internal merchant error.
 * - 6 (`INTERNAL_SERVER`): Some strange service error (e.g. invalid merchant data passed, data format).
 * - 175 (`MAIL_EMPTY`): Payer email is required for payment, but empty.
 * - 189 (`MERCHANT_ACCOUNT_CLOSED`): The associated merchant account has been closed.
 * - 7 (`MERCHANT_INVALID`): Invalid merchant data.
 * - 74 (`MERCHANT_REJECT`): Transaction was rejected by gateway.
 * - 166 (`MERCHANT_SETTINGS_VAULT`): Merchant has invalid settings and does not return customer vault.
 *
 *   One of the possible reasons - merchant with a name 'demo' should not be used.
 * - 18 (`METHOD_ACCESS`): User has no access to the specified payment method.
 *   (You have no privileges to use this payment method.)
 * - 96 (`METHOD_AUTHORIZE`): This method does not support authorization request.
 * - 19 (`METHOD_BUSINESS`): This payment method can not be used with this business.
 * - 20 (`METHOD_MULTIPLE`): Multiple usage of this payment method is not allowed.
 * - 25 (`NAME_EMPTY`): Cardholder name is not typed in.
 * - 106 (`NAME_INVALID`): Customer name is invalid (contains invalid characters).
 * - 26 (`NAME_LONG`): Cardholder name is too long.
 * - 159 (`NMI_PAYSAFE_900`): Validation Rejection.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 110 (`NMI_PAYSAFE_901`): Not sufficient funds (debits only).
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 111 (`NMI_PAYSAFE_903`): Payment stopped/recalled.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 112 (`NMI_PAYSAFE_904`): Post dated/stale dated.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 113 (`NMI_PAYSAFE_905`): Account closed.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 114 (`NMI_PAYSAFE_906`): Account transferred.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 115 (`NMI_PAYSAFE_907`): No chequing privileges.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 116 (`NMI_PAYSAFE_908`): Funds not cleared.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 117 (`NMI_PAYSAFE_910`): Payor/payee deceased.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 118 (`NMI_PAYSAFE_911`): Account frozen.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 119 (`NMI_PAYSAFE_912`): Invalid/incorrect account number.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 120 (`NMI_PAYSAFE_914`): Incorrect payor/payee name.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 121 (`NMI_PAYSAFE_915`): Refused by payor/payee.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 122 (`NMI_PAYSAFE_998`): No Return Agreement.
 *
 *   This error code is specific for a case when Pay Safe is used within NMI.
 * - 27 (`NUMBER_EMPTY`): Card number is not typed in.
 * - 30 (`NUMBER_INVALID`): Card number is invalid.
 * - 28 (`NUMBER_LONG`): Card number is too long.
 * - 29 (`NUMBER_SHORT`): Card number is too long.
 * - 4 (`PARAMETER`): Some parameters client has provided are invalid.
 * - 165 (`PASSIVE`): Payment form is in passive mode.
 *
 *   No payments can be performed in passive mode.
 * - 167 (`PAYER_AUTHENTICATION`): Error during authentication of the payer.
 *
 *   Payer authentication is performed, for example, as a part of 3D Secure protocol.
 *   This error may mean, for example, that SMS code that user has entered is invalid.
 * - 174 (`PAYMENT_UPDATE_LOCK`): There is other process currently running to update payment. Failed to wait until it
 * ends.
 * - 107 (`PHONE_EMPTY`): Phone number is not specified on user account.
 *
 *   Phone number may be required (for example, Direct Connect requires it for ACH transactions).
 * - 178 (`PHONE_INVALID`): Phone number is invalid.
 * - 108 (`PHONE_LONG`): Phone number is too long.
 * - 98 (`PROCESSOR_ERROR`): Transaction error returned by processor.
 *
 *   May be caused by problems like:
 *   unsuccessful authorization
 *   unsuccessful payment
 *   card requires PIN to be entered
 * - 109 (`PROCESSOR_INTERNAL`): Internal error at processor side has occurred.
 *
 *   Example: "Host Communication Error" at Direct Connect.
 * - 50 (`REFUND_EARLY`): Refund operation is applied too early.
 *
 *   Some merchant processors may require some time to pass after transaction to refund it.
 * - 49 (`REFUND_REST`): Amount about to refund is larger then the current rest of the transaction.
 *
 *   Current rest is either `rs_pay_transaction.f_amount` for transactions that was not refunded before,
 *   or `rs_pay_transaction_refund.f_amount` for partially refunded transactions.
 * - 48 (`REFUND_STATUS`): Transaction can not be refunded because it is in an invalid status.
 *
 *   Status of the transaction is stored in `rs_pay_transaction.id_pay_transaction_status`.
 *
 *   Statuses where refund is allowed are defined by
 * [RsPayTransactionStatusSid::refund()](#/components/schemas/RsPayTransactionStatusSid).
 * - 37 (`REGION_INVALID`): Invalid region chosen.
 * - 38 (`REGION_NX`): Chosen region does not exist.
 * - 15 (`REPEAT_INVALID`): Can not repeat purchase transaction. Reference data is expired and invalid now.
 * - 12 (`REQUEST`): Error during request to service. In case we have not even got response.
 * - 172 (`REQUEST_THROTTLE`): Too many requests.
 * - 3 (`RETRY`): Temporary service error. Repeat request.
 * - 103 (`SECURITY_LARGE`): Payment is blocked due security reasons (because payment amount is too large).
 * - 188 (`SKIP_IN_TESTS`): Only for test, when there is an error in the test that we cannot influence, for example:
 * “server is not available”.
 * - 31 (`STRIPE_EMPTY`): Stripe data is empty.
 * - 16 (`STRIPE_INVALID`): Invalid data on magnetic stripe. Maybe some part does not exist.
 * - 161 (`TOKEN_ACCOUNT`): This recurrent payment token belongs to a different account of this merchant.
 *
 *   Two cases may cause this problem:
 *
 *   1. Payment tokens were imported from a different Direct Connect account. This is not allowed. Payment tokens can
 *   only be used within that account within which they were created.
 *
 *   2. User was added successfully. After that you have changed login and password to a different Direct Connect
 *   account.
 *
 *   For Paychoyce in the context of processing a transaction invalid card token can mean any of the following:
 *
 *   1. The token GUID supplied in the request is not a GUID (Very unlikely).
 *
 *   2. The token presented on the charge request does not exist in Paychoice V4 (This is the most likely case: the
 * token wasn't migrated from V3).
 *
 *   3. The token presented on the charge request has been marked as Inactive/Expired (This is part of PCI compliance
 * process to expire tokens that have not been used in 12 months - possible but not very likely).
 * - 162 (`TOKEN_PROCESSOR`): Payment token belongs to a different merchant processor.
 *
 *   For example. Recurrent payment token was created by NMI.
 *
 *   After that they have changed business merchant to use Direct Connect.
 *
 *   Without this check, recurrent payment token in NMI format will be passed to a class that expects that  it was
 *   created in Direct Connect format.
 *
 *   This will lead to that:
 *
 *   1. There will be PHP notices about undefined index, because DC class will try to access fields that are not
 *       set by NMI.
 *   2. NULL will be sent as vault ID, this will lead to a failed transaction.
 * - 13 (`TRANSACTION_NX`): Transaction does not exist. E.g. we want to make refund using nonexistent reference number.
 * - 187 (`UNEXPECTED_TRANSACTION_STATUS`): Transaction is in unexpected status. For example, authorization process
 * started but takes long time. While waiting
 *   staff decided to cancel transaction. Void is done, transaction is in
 * [RsPayTransactionStatusSid::VOID](#/components/schemas/RsPayTransactionStatusSid)
 *   status. In the same time authorization process finishes, code expects transaction to be in
 *   [RsPayTransactionStatusSid::AUTHORIZE_ACTIVE](#/components/schemas/RsPayTransactionStatusSid) status, but it is
 * not. This can happen when transaction
 *   is processed in several processes. For example, card swipe is initiated, but staff presses Cancel Transaction
 *   button.
 * - 194 (`USER_DEBTOR`): If the user who pays through the account is a debtor.
 * - 56 (`USER_GUEST`): If access denied to an anonymous user.
 * - 197 (`USER_NOT_FOUND`): Error specific for payment processors that stores payer entity.
 *   Means that payer entity with specified ID does not exist.
 * - 193 (`VOID_ERROR`): Some unpredicted error happened during void on processor side.
 * - 180 (`VOID_LATE`): Operation Void is not possible, it's too late to do it.
 * - 100 (`VOID_PARTIAL`): Void operation can be done only for a total transaction amount and cannot be partial.
 * - 102 (`VOID_RESTRICT`): Void operation is restricted by rules of the system.
 * - 101 (`VOID_SUPPORT`): Void operation is not supported by the merchant processor.
 * - 104 (`WAIT_TIMEOUT`): Timeout waiting for settlement.
 * - 195 (`TENDER_TYPE_INVALID`): Incorrect payment card type specified.
 */
class RsPayException
{
    /** Invalid ABA number chosen. */
    public const ABAN_EMPTY = 58;

    /** Invalid ABA number chosen. */
    public const ABAN_INVALID = 57;

    /** User Authentication Failed. */
    public const ACCESS_AUTHENTICATE = 160;

    /** Authentication token is not valid. */
    public const ACCESS_TOKEN_INVALID = 181;

    /** Account payment entry method is empty. */
    public const ACCOUNT_ENTRY_EMPTY = 63;

    /** Account holder type is empty. */
    public const ACCOUNT_HOLDER_EMPTY = 64;

    /** Account name is empty. */
    public const ACCOUNT_NAME_EMPTY = 59;

    /** Account name is too long. */
    public const ACCOUNT_NAME_LONG = 60;

    /** Account number is empty. */
    public const ACCOUNT_NUMBER_EMPTY = 61;

    /** Account number invalid. */
    public const ACCOUNT_NUMBER_INVALID = 67;

    /** Account number is too long. */
    public const ACCOUNT_NUMBER_LONG = 62;

    /** Account number is too short. */
    public const ACCOUNT_NUMBER_SHORT = 66;

    /** Account owner is empty. */
    public const ACCOUNT_OWNER_EMPTY = 69;

    /** Account name is too long. */
    public const ACCOUNT_OWNER_LONG = 70;

    /** Account owner name does not equal billing name. */
    public const ACCOUNT_OWNER_DOES_NOT_MATCH = 182;

    /** Account type is empty. */
    public const ACCOUNT_TYPE_EMPTY = 65;

    /** ACH: Account Closed. */
    public const ACH_E02 = 198;

    /** ACH: No Account / Unable to Locate Account. */
    public const ACH_E03 = 199;

    /** ACH: Invalid Account Number. */
    public const ACH_E04 = 200;

    /** ACH: Unauthorized Debit to Consumer Account Using Corporate SEC Code. */
    public const ACH_E05 = 201;

    /** ACH: Authorization Revoked by Customer. */
    public const ACH_E07 = 202;

    /** ACH: Payment Stopped. */
    public const ACH_E08 = 203;

    /** ACH: Customer Advises Originator Not Known / Not Authorized. */
    public const ACH_E10 = 204;

    /** ACH: Customer Advises Entry Not in Accordance with Authorization. */
    public const ACH_E11 = 205;

    /** ACH: RDFI Not Qualified to Participate. */
    public const ACH_E13 = 206;

    /** ACH: Representative Payee Deceased or Unable to Continue. */
    public const ACH_E14 = 207;

    /** ACH: Beneficiary or Account Holder Deceased. */
    public const ACH_E15 = 208;

    /** ACH: Account Frozen. */
    public const ACH_E16 = 209;

    /** ACH: Invalid Account Number under Questionable Circumstances. */
    public const ACH_E17 = 210;

    /** ACH: Non-Transaction Account. */
    public const ACH_E20 = 211;

    /** ACH: Corporate Customer Advises Not Authorized. */
    public const ACH_E29 = 212;

    /** ACH: Invalid Image. */
    public const ACH_E92 = 213;

    /** ACH: Non-Negotiable. */
    public const ACH_E93 = 214;

    /** ACH: Breach of Warranty. */
    public const ACH_E95 = 215;

    /** ACH: Counterfeit / Forgery. */
    public const ACH_E96 = 216;

    /** ACH: Refer to Maker. */
    public const ACH_E97 = 217;

    /** Insufficient funds. */
    public const ACH_R01 = 124;

    /** Bank account closed. */
    public const ACH_R02 = 125;

    /** No bank account/unable to locate account. */
    public const ACH_R03 = 126;

    /** Invalid bank account number. */
    public const ACH_R04 = 127;

    /** Unauthorized Debit to Consumer Account Using Corporate SEC Code. */
    public const ACH_R05 = 128;

    /** Returned per ODFI request. */
    public const ACH_R06 = 129;

    /** Authorization revoked by customer. */
    public const ACH_R07 = 130;

    /** Payment stopped. */
    public const ACH_R08 = 131;

    /** Uncollected funds. */
    public const ACH_R09 = 132;

    /** Customer advises not authorized. */
    public const ACH_R10 = 133;

    /** Check truncation entry return. */
    public const ACH_R11 = 134;

    /** Branch sold to another RDFI. */
    public const ACH_R12 = 135;

    /** RDFI not qualified to participate. */
    public const ACH_R13 = 136;

    /** Representative payee deceased or unable to continue in that capacity. */
    public const ACH_R14 = 137;

    /** Beneficiary or bank account holder. */
    public const ACH_R15 = 138;

    /** Bank account frozen. */
    public const ACH_R16 = 139;

    /** File record edit criteria. */
    public const ACH_R17 = 140;

    /** Improper effective entry date. */
    public const ACH_R18 = 141;

    /** Amount field error. */
    public const ACH_R19 = 142;

    /** Non-payment bank account. */
    public const ACH_R20 = 143;

    /** Invalid company ID number. */
    public const ACH_R21 = 144;

    /** Invalid individual ID number. */
    public const ACH_R22 = 145;

    /** Credit entry refused by receiver. */
    public const ACH_R23 = 146;

    /** Duplicate entry. */
    public const ACH_R24 = 147;

    /** Addenda error. */
    public const ACH_R25 = 148;

    /** Mandatory field error. */
    public const ACH_R26 = 149;

    /** Trace number error. */
    public const ACH_R27 = 150;

    /** Transit routing number check digit error. */
    public const ACH_R28 = 151;

    /** Corporate customer advises not authorized. */
    public const ACH_R29 = 152;

    /** RDFI not participant in check truncation program. */
    public const ACH_R30 = 153;

    /** Permissible return entry (CCD and CTX only). */
    public const ACH_R31 = 154;

    /** RDFI non-settlement. */
    public const ACH_R32 = 155;

    /** Return of XCK entry. */
    public const ACH_R33 = 156;

    /** Limited participation RDFI. */
    public const ACH_R34 = 157;

    /** Return of improper debit entry. */
    public const ACH_R35 = 158;

    /** ACH: Return of Improper Credit Entry. */
    public const ACH_R36 = 218;

    /** ACH: Source Document Presented for Payment. */
    public const ACH_R37 = 219;

    /** ACH: Stop Payment on Source Document. */
    public const ACH_R38 = 220;

    /** ACH: Improper Source Document. */
    public const ACH_R39 = 221;

    /** ACH: Return of ENR Entry by Federal Government Agency. */
    public const ACH_R40 = 222;

    /** ACH: Invalid Transaction Code. */
    public const ACH_R41 = 223;

    /** ACH: Routing Number / Check Digit Error. */
    public const ACH_R42 = 224;

    /** ACH: Invalid DFI Account Number. */
    public const ACH_R43 = 225;

    /** ACH: Invalid Individual ID Number / Identification. */
    public const ACH_R44 = 226;

    /** ACH: Invalid Individual Name / Company Name. */
    public const ACH_R45 = 227;

    /** ACH: Invalid Representative Payee Indicator. */
    public const ACH_R46 = 228;

    /** ACH: Duplicate Enrollment. */
    public const ACH_R47 = 229;

    /** ACH: State Law Affecting RCK Acceptance. */
    public const ACH_R50 = 230;

    /** ACH: Item is Ineligible, Notice Not Provided, etc. */
    public const ACH_R51 = 231;

    /** ACH: Stop Payment on Item (Adjustment Entries). */
    public const ACH_R52 = 232;

    /** ACH: Item and ACH Entry Presented for Payment. */
    public const ACH_R53 = 233;

    /** ACH: Misrouted Return. */
    public const ACH_R61 = 234;

    /** ACH: Incorrect Trace Number. */
    public const ACH_R62 = 235;

    /** ACH: Incorrect Dollar Amount. */
    public const ACH_R63 = 236;

    /** ACH: Incorrect Individual Identification. */
    public const ACH_R64 = 237;

    /** ACH: Incorrect Transaction Code. */
    public const ACH_R65 = 238;

    /** ACH: Incorrect Company Identification. */
    public const ACH_R66 = 239;

    /** ACH: Duplicate Return. */
    public const ACH_R67 = 240;

    /** ACH: Untimely Return. */
    public const ACH_R68 = 241;

    /** ACH: Multiple Errors. */
    public const ACH_R69 = 242;

    /** ACH: Permissible Return Entry Not Accepted. */
    public const ACH_R70 = 243;

    /** ACH: Misrouted Dishonored Return. */
    public const ACH_R71 = 244;

    /** ACH: Untimely Dishonored Return. */
    public const ACH_R72 = 245;

    /** ACH: Timely Original Return. */
    public const ACH_R73 = 246;

    /** ACH: Corrected Return. */
    public const ACH_R74 = 247;

    /** ACH: Return Not a Duplicate. */
    public const ACH_R75 = 248;

    /** ACH: No Errors Found. */
    public const ACH_R76 = 249;

    /** ACH: IAT Entry Coding Error. */
    public const ACH_R80 = 250;

    /** ACH: Non-Participant in IAT Program. */
    public const ACH_R81 = 251;

    /** ACH: Invalid Foreign Receiving DFI Identification. */
    public const ACH_R82 = 252;

    /** ACH: Foreign Receiving DFI Unable to Settle. */
    public const ACH_R83 = 253;

    /** ACH: Entry Not Processed by Gateway. */
    public const ACH_R84 = 254;

    /** ACH: Incorrectly Coded Outbound International Payment. */
    public const ACH_R85 = 255;

    /** ACH check type or account type is invalid. */
    public const ACH_ACCOUNT_TYPE = 185;

    /** ACH payment method is not supported by processor. */
    public const ACH_SUPPORT = 105;

    /** ACH error: uncollected. */
    public const ACH_UNCOLLECTED = 123;

    /** Invalid payment address chosen. */
    public const ADDRESS_INVALID = 39;

    /** Chosen payment address does not exist. */
    public const ADDRESS_NX = 40;

    /** Disagreement with the Payment Agreement. */
    public const AGREEMENT_DISAGREE = 176;

    /** Sum of amounts for all individual payment sources does not equal the total expected amount. */
    public const AMOUNT_CONSOLIDATE = 35;

    /** Total package price can't be divided equally between package items without loosing cents. */
    public const AMOUNT_CONSOLIDATE_PACKAGE = 191;

    /** Amount was unexpectedly changed during the purchase process. */
    public const AMOUNT_CHANGE = 179;

    /** Amount is invalid. */
    public const AMOUNT_INVALID = 34;

    /** Total price of cart greater than `1000000000.00`. */
    public const AMOUNT_TOTAL = 75;

    /** Amount equals zero. */
    public const AMOUNT_ZERO = 32;

    /** AVS verification failed. Postal code or address are invalid. */
    public const AVS = 14;

    /** Invalid bank account ID. */
    public const BANK_ACCOUNT_INVALID = 79;

    /** Bank account ID does not exist. */
    public const BANK_ACCOUNT_NX = 80;

    /** Bank state branch is empty. */
    public const BSB_EMPTY = 77;

    /** Bank state branch is invalid. */
    public const BSB_INVALID = 78;

    /** This business is a lost customer. */
    public const BUSINESS_CHURN = 173;

    /** Client must call issuer for further information. */
    public const CALL = 17;

    /** Card data is valid, but you can not pay with it (e.g. hold placed on card). */
    public const CARD_DECLINE = 5;

    /** Invalid payment card chosen. */
    public const CARD_INVALID = 42;

    /** Card over limit. */
    public const CARD_LIMIT = 73;

    /** Payment card nickname is empty. */
    public const CARD_NAME_EMPTY = 46;

    /** Payment card nickname is too long. */
    public const CARD_NAME_LONG = 47;

    /** The customer’s bank has declined the transaction as the credit card number has failed a security check, or the */
    public const CARD_NOT_HONOR = 71;

    /** Insufficient funds available. */
    public const CARD_NSF = 72;

    /** Chosen payment card does not exist. */
    public const CARD_NX = 43;

    /** User has chosen payment card but he had no such rights. */
    public const CARD_SELECT = 44;

    /** No such card issuer. */
    public const CARD_ISSUER_INVALID = 184;

    /** Card unsupported. */
    public const CARD_UNSUPPORTED = 190;

    /** Element which should be paid with this payment has been canceled and payment should be blocked. */
    public const CANCELED = 177;

    /** Comment for payment method too long. */
    public const COMMENT_LONG = 99;

    /** Can't connect to payment gateway. */
    public const CONNECT = 8;

    /** Unsupported country. */
    public const COUNTRY_UNSUPPORTED = 164;

    /** Gift card belongs to a foreign business. */
    public const COUPON_BUSINESS = 55;

    /** Invalid payment card chosen. */
    public const COUPON_CURRENCY = 54;

    /** Coupon is inactive. */
    public const COUPON_INACTIVE = 97;

    /** Coupon code is invalid (invalid length, or invalid characters encountered). */
    public const COUPON_INVALID = 51;

    /** Invalid payment card chosen. */
    public const COUPON_NX = 52;

    /** Coupon is redeemed already. */
    public const COUPON_REDEEM = 53;

    /** Card credentials (number, csc, month, year) change ability is disabled. E.g. payment processor may not support */
    public const CREDENTIAL_SUPPORT = 76;

    /** Invalid card security code (CSC). */
    public const CSC_EMPTY = 21;

    /** Invalid card security code (CSC). */
    public const CSC_INVALID = 2;

    /** Card is expired. */
    public const DATE_EXPIRE = 24;

    /** Card is inactive. */
    public const DATE_INACTIVE = 163;

    /** Invalid Expiration Date. */
    public const DATE_INVALID = 183;

    /** Month is invalid. */
    public const DATE_MONTH = 22;

    /** Multiple usage of this payment method is not allowed. */
    public const DATE_YEAR = 23;

    /** Duplicate transaction. Transaction data that is selected for comparison is payment gateway-specific. */
    public const DUPLICATE = 1;

    /** Error, caused by one of the following cases: */
    public const FRAUD = 168;

    /** Terminal that should be used for payment is not found. */
    public const HARDWARE_NOT_FOUND = 196;

    /** Informational field is not filled in. */
    public const INFO_EMPTY = 9;

    /** Informational field is too long. */
    public const INFO_LONG = 41;

    /** Minimum payment amount is less then `1`. */
    public const INSTALLMENT_AMOUNT_MIN = 93;

    /** Installment plan: Number of payment is invalid. */
    public const INSTALLMENT_COUNT_FORMAT = 85;

    /** Installment plan: Number of payment is too large. */
    public const INSTALLMENT_COUNT_MAX = 87;

    /** Installment plan: Number of payment is too small (less then 2). */
    public const INSTALLMENT_COUNT_MIN = 86;

    /** Installment date is not specified. */
    public const INSTALLMENT_DATE_EMPTY = 81;

    /** Installment date format is invalid. */
    public const INSTALLMENT_DATE_FORMAT = 82;

    /** Installment date is too deep in the future. */
    public const INSTALLMENT_DATE_FUTURE = 84;

    /** Installment date is in the past (minimum is today). */
    public const INSTALLMENT_DATE_PAST = 83;

    /** Installment plan: Duration of a period is not allowed. */
    public const INSTALLMENT_DURATION_DISABLE = 91;

    /** Installment plan: Maximum total duration of installment plan is 100 years. */
    public const INSTALLMENT_DURATION_MAX = 92;

    /** Installment plan: Duration of a period does not exist. */
    public const INSTALLMENT_DURATION_NX = 90;

    /** Installment plan: Number of periods between two consecutive payments is invalid. */
    public const INSTALLMENT_PERIOD_FORMAT = 88;

    /** Installment plan: Number of periods between two consecutive payments is too large. */
    public const INSTALLMENT_PERIOD_MAX = 89;

    /** Template of installment plans: template is not selected. */
    public const INSTALLMENT_TEMPLATE_EMPTY = 95;

    /** Template of installment plans: ID of the template does not exist. */
    public const INSTALLMENT_TEMPLATE_NX = 94;

    /** Internal errors that occurred in the browser (for example, some form data arrived to servers such that user should */
    public const INTERNAL_BROWSER = 33;

    /** Security throttling error. */
    public const INTERNAL_HIT = 192;

    /** Internal merchant error. */
    public const INTERNAL_MERCHANT = 186;

    /** Some strange service error (e.g. invalid merchant data passed, data format). */
    public const INTERNAL_SERVER = 6;

    /** Payer email is required for payment, but empty. */
    public const MAIL_EMPTY = 175;

    /** The associated merchant account has been closed. */
    public const MERCHANT_ACCOUNT_CLOSED = 189;

    /** Invalid merchant data. */
    public const MERCHANT_INVALID = 7;

    /** Transaction was rejected by gateway. */
    public const MERCHANT_REJECT = 74;

    /** Merchant has invalid settings and does not return customer vault. */
    public const MERCHANT_SETTINGS_VAULT = 166;

    /** User has no access to the specified payment method. */
    public const METHOD_ACCESS = 18;

    /** This method does not support authorization request. */
    public const METHOD_AUTHORIZE = 96;

    /** This payment method can not be used with this business. */
    public const METHOD_BUSINESS = 19;

    /** Multiple usage of this payment method is not allowed. */
    public const METHOD_MULTIPLE = 20;

    /** Cardholder name is not typed in. */
    public const NAME_EMPTY = 25;

    /** Customer name is invalid (contains invalid characters). */
    public const NAME_INVALID = 106;

    /** Cardholder name is too long. */
    public const NAME_LONG = 26;

    /** Validation Rejection. */
    public const NMI_PAYSAFE_900 = 159;

    /** Not sufficient funds (debits only). */
    public const NMI_PAYSAFE_901 = 110;

    /** Payment stopped/recalled. */
    public const NMI_PAYSAFE_903 = 111;

    /** Post dated/stale dated. */
    public const NMI_PAYSAFE_904 = 112;

    /** Account closed. */
    public const NMI_PAYSAFE_905 = 113;

    /** Account transferred. */
    public const NMI_PAYSAFE_906 = 114;

    /** No chequing privileges. */
    public const NMI_PAYSAFE_907 = 115;

    /** Funds not cleared. */
    public const NMI_PAYSAFE_908 = 116;

    /** Payor/payee deceased. */
    public const NMI_PAYSAFE_910 = 117;

    /** Account frozen. */
    public const NMI_PAYSAFE_911 = 118;

    /** Invalid/incorrect account number. */
    public const NMI_PAYSAFE_912 = 119;

    /** Incorrect payor/payee name. */
    public const NMI_PAYSAFE_914 = 120;

    /** Refused by payor/payee. */
    public const NMI_PAYSAFE_915 = 121;

    /** No Return Agreement. */
    public const NMI_PAYSAFE_998 = 122;

    /** Card number is not typed in. */
    public const NUMBER_EMPTY = 27;

    /** Card number is invalid. */
    public const NUMBER_INVALID = 30;

    /** Card number is too long. */
    public const NUMBER_LONG = 28;

    /** Card number is too long. */
    public const NUMBER_SHORT = 29;

    /** Some parameters client has provided are invalid. */
    public const PARAMETER = 4;

    /** Payment form is in passive mode. */
    public const PASSIVE = 165;

    /** Error during authentication of the payer. */
    public const PAYER_AUTHENTICATION = 167;

    /** There is other process currently running to update payment. Failed to wait until it ends. */
    public const PAYMENT_UPDATE_LOCK = 174;

    /** Phone number is not specified on user account. */
    public const PHONE_EMPTY = 107;

    /** Phone number is invalid. */
    public const PHONE_INVALID = 178;

    /** Phone number is too long. */
    public const PHONE_LONG = 108;

    /** Transaction error returned by processor. */
    public const PROCESSOR_ERROR = 98;

    /** Internal error at processor side has occurred. */
    public const PROCESSOR_INTERNAL = 109;

    /** Refund operation is applied too early. */
    public const REFUND_EARLY = 50;

    /** Amount about to refund is larger then the current rest of the transaction. */
    public const REFUND_REST = 49;

    /** Transaction can not be refunded because it is in an invalid status. */
    public const REFUND_STATUS = 48;

    /** Invalid region chosen. */
    public const REGION_INVALID = 37;

    /** Chosen region does not exist. */
    public const REGION_NX = 38;

    /** Can not repeat purchase transaction. Reference data is expired and invalid now. */
    public const REPEAT_INVALID = 15;

    /** Error during request to service. In case we have not even got response. */
    public const REQUEST = 12;

    /** Too many requests. */
    public const REQUEST_THROTTLE = 172;

    /** Temporary service error. Repeat request. */
    public const RETRY = 3;

    /** Payment is blocked due security reasons (because payment amount is too large). */
    public const SECURITY_LARGE = 103;

    /** Only for test, when there is an error in the test that we cannot influence, for example: “server is not available”. */
    public const SKIP_IN_TESTS = 188;

    /** Stripe data is empty. */
    public const STRIPE_EMPTY = 31;

    /** Invalid data on magnetic stripe. Maybe some part does not exist. */
    public const STRIPE_INVALID = 16;

    /** This recurrent payment token belongs to a different account of this merchant. */
    public const TOKEN_ACCOUNT = 161;

    /** Payment token belongs to a different merchant processor. */
    public const TOKEN_PROCESSOR = 162;

    /** Transaction does not exist. E.g. we want to make refund using nonexistent reference number. */
    public const TRANSACTION_NX = 13;

    /** Transaction is in unexpected status. For example, authorization process started but takes long time. While waiting */
    public const UNEXPECTED_TRANSACTION_STATUS = 187;

    /** If the user who pays through the account is a debtor. */
    public const USER_DEBTOR = 194;

    /** If access denied to an anonymous user. */
    public const USER_GUEST = 56;

    /** Error specific for payment processors that stores payer entity. */
    public const USER_NOT_FOUND = 197;

    /** Some unpredicted error happened during void on processor side. */
    public const VOID_ERROR = 193;

    /** Operation Void is not possible, it's too late to do it. */
    public const VOID_LATE = 180;

    /** Void operation can be done only for a total transaction amount and cannot be partial. */
    public const VOID_PARTIAL = 100;

    /** Void operation is restricted by rules of the system. */
    public const VOID_RESTRICT = 102;

    /** Void operation is not supported by the merchant processor. */
    public const VOID_SUPPORT = 101;

    /** Timeout waiting for settlement. */
    public const WAIT_TIMEOUT = 104;

    /** Incorrect payment card type specified. */
    public const TENDER_TYPE_INVALID = 195;
}
