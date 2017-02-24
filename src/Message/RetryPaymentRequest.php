<?php
namespace Omnipay\GoCardlessV2\Message;

class RetryPaymentRequest extends AbstractRequest
{
    public function getData()
    {
        return array(
            'paymentData' => array('metadata'=>$this->getPaymentMetaData()),
            'paymentId' => $this->getPaymentId(),
        );
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     * @return PaymentResponse
     */
    public function sendData($data)
    {
        $response = $this->gocardless->payments()->retry($data['paymentId'], $data['paymentData']);

        return $this->response = new PaymentResponse($this, $response);
    }
}
