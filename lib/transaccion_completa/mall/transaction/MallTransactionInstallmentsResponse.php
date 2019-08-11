<?php

/**
 * Class MallTransactionInstallmentsResponse
 *
 * @category
 * @package Transbank\TransaccionCompleta
 *
 */


namespace Transbank\TransaccionCompleta;


class MallTransactionInstallmentsResponse
{
    public $installmentsAmount;
    public $idQueryInstallments;
    public $deferredPeriods;

    public function __construct($json)
    {
        $installmentsAmount = isset($json["installments_amount"]) ? $json["installments_amount"] : null;
        $this->setInstallmentsAmount($installmentsAmount);
        $idQueryInstallments = isset($json["id_query_installments"]) ? $json["id_query_installments"] : null;
        $this->setIdQueryInstallments($idQueryInstallments);
        $deferredPeriods = isset($json["deferred_periods"]) ? $json["deferred_periods"] : null;
        $this->setDeferredPeriods($deferredPeriods);
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
     */
    public function setInstallmentsAmount($installmentsAmount)
    {
        $this->installmentsAmount = $installmentsAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdQueryInstallments()
    {
        return $this->idQueryInstallments;
    }

    /**
     * @param mixed $idQueryInstallments
     */
    public function setIdQueryInstallments($idQueryInstallments)
    {
        $this->idQueryInstallments = $idQueryInstallments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeferredPeriods()
    {
        return $this->deferredPeriods;
    }

    /**
     * @param mixed $deferredPeriods
     */
    public function setDeferredPeriods($deferredPeriods)
    {
        $this->deferredPeriods = $deferredPeriods;
        return $this;
    }



}
