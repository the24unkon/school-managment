<?php

namespace Omnipay\WorldPay\Message;

/**
 * WorldPay Purchase Request
 */
class JsonRefundRequest extends JsonAbstractRequest
{

    public function getData()
    {
        $this->validate('amount');

        $data = array();

        $data['refundAmount'] = $this->getAmountInteger();

        return $data;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint.'/orders/'.$this->getTransactionReference().'/refund';
    }
}
