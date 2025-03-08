<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    public function processTransaction($amount, $type)
    {
        $commission = $this->calculateCommission($amount, $type);
        $transaction = Transaction::create([
            'transaction_id' => uniqid('txn_'),
            'amount' => $amount,
            'commission' => $commission,
            'type' => $type,
            'status' => 'completed',
        ]);

        return $transaction;
    }

    private function calculateCommission($amount, $type)
    {
        if ($type === 'blockchain') {
            return $amount * Transaction::BLOCKCHAIN_COMMISSION;
        } elseif ($type === 'manual') {
            return $amount * Transaction::MANUAL_COMMISSION;
        }
        return 0;
    }
}