<?php

/**
 * Class TransactionCommitResponse
 *
 * @category
 * @package Transbank\TransaccionCompleta
 *
 */


namespace Transbank\TransaccionCompleta;


class TransactionCommitResponse
{
    public $vci;
    public $amount;
    public $status;
    public $buyOrder;
    public $sessionId;
    public $cardDetail; // card_number
    public $accountingDate;
    public $transactionDate;
    public $authorizationCode;
    public $paymentTypeCode;
    public $responseCode;
    public $installmentsNumber;
    public $installmentsAmount;

    public function __construct($json)
    {
        $vci = isset($json["vci"]) ? $json["vci"] : null;
        $this->setVci($vci);
        $amount = isset($json["amount"]) ? $json["amount"] : null;
        $this->setAmount($amount);
        $status = isset($json["status"]) ? $json["status"] : null;
        $this->setStatus($status);
        $buyOrder = isset($json["buy_order"]) ? $json["buy_order"] : null;
        $this->setBuyOrder($buyOrder);
        $sessionId = isset($json["session_id"]) ? $json["session_id"] : null;
        $this->setSessionId($sessionId);
        $cardDetail= isset($json["accounting_date"]) ? $json["accounting_date"] : null;
        $this->setCardDetail($cardDetail);
        $accountingDate = isset($json["card_detail"]) ? $json["card_detail"] : null;
        $this->setAccountingDate($accountingDate);
        $transactionDate = isset($json["transaction_date"]) ? $json["transaction_date"] : null;
        $this->setTransactionDate($transactionDate);
        $authorizationCode = isset($json["authorization_code"]) ? $json["authorization_code"] : null;
        $this->setAuthorizationCode($authorizationCode);
        $paymentTypeCode = isset($json["payment_type_code"]) ? $json["payment_type_code"] : null;
        $this->setPaymentTypeCode($paymentTypeCode);
        $responseCode = isset($json["response_code"]) ? $json["response_code"] : null;
        $this->setResponseCode($responseCode);
        $installmentsNumber = isset($json["installments_number"]) ? $json["installments_number"] : null;
        $this->setInstallmentsNumber($installmentsNumber);
        $installmentsAmount = isset($json["installments_amount"]) ? $json["installments_amount"] : null;
        $this->setInstallmentsAmount($installmentsAmount);
    }


    /**
     * @return mixed
     */
    public function getVci()
    {
        return $this->vci;
    }

    /**
     * @param mixed $vci
     * @return TransactionCommitResponse
     */
    public function setVci($vci)
    {
        $this->vci = $vci;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return TransactionCommitResponse
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return TransactionCommitResponse
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyOrder()
    {
        return $this->buyOrder;
    }

    /**
     * @param mixed $buyOrder
     * @return TransactionCommitResponse
     */
    public function setBuyOrder($buyOrder)
    {
        $this->buyOrder = $buyOrder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param mixed $sessionId
     * @return TransactionCommitResponse
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardDetail()
    {
        return $this->cardDetail;
    }

    /**
     * @param mixed $cardDetail
     * @return TransactionCommitResponse
     */
    public function setCardDetail($cardDetail)
    {
        $this->cardDetail = $cardDetail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountingDate()
    {
        return $this->accountingDate;
    }

    /**
     * @param mixed $accountingDate
     * @return TransactionCommitResponse
     */
    public function setAccountingDate($accountingDate)
    {
        $this->accountingDate = $accountingDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * @param mixed $transactionDate
     * @return TransactionCommitResponse
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @param mixed $authorizationCode
     * @return TransactionCommitResponse
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentTypeCode()
    {
        return $this->paymentTypeCode;
    }

    /**
     * @param mixed $paymentTypeCode
     * @return TransactionCommitResponse
     */
    public function setPaymentTypeCode($paymentTypeCode)
    {
        $this->paymentTypeCode = $paymentTypeCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param mixed $responseCode
     * @return TransactionCommitResponse
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallmentsNumber()
    {
        return $this->installmentsNumber;
    }

    /**
     * @param mixed $installmentsNumber
     * @return TransactionCommitResponse
     */
    public function setInstallmentsNumber($installmentsNumber)
    {
        $this->installmentsNumber = $installmentsNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallmentsAmount()
    {
        return $this->installmentsAmount;
    }

    /**
     * @param mixed $installmentsAmount
     * @return TransactionCommitResponse
     */
    public function setInstallmentsAmount($installmentsAmount)
    {
        $this->installmentsAmount = $installmentsAmount;
        return $this;
    }




}
