<?php
/** Convert a given amount (in EUR or USD) into another currency (EUR or USD)
 * 
 * @param int/float $amount The given amount to be converted
 * @param string $currency The targeted currency
 * 
 * @return int/float $amountToBeReturned The converted amount 
 */
function convertCurrency($amount, $currency) {
    $exchangeRate = 1.085965; 
    if (is_int($amount) || is_float($amount)) {
        if ($currency == 'EUR') {
            $amountToBeReturned = $amount / $exchangeRate;
            return $amountToBeReturned;
        } elseif ($currency == 'USD') {
            $amountToBeReturned = $amount * $exchangeRate;
            return $amountToBeReturned;
        } else {
            throw new RuntimeException('Uncorrect currency');
            return;
        }
    } else {
        throw new RuntimeException('Uncorrect amount type');
        return;
    } 
}