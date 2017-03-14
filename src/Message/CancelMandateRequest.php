<?php

namespace Omnipay\GoCardlessV2\Message;

class CancelMandateRequest extends AbstractRequest
{
    public function getData()
    {
        return [];
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return MandateResponse
     */
    public function sendData($data)
    {
        $response = $this->gocardless->mandates()->cancel($this->getMandateId());

        return $this->response = new MandateResponse($this, $response);
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\Common\Message\ResponseInterface|MandateResponse
     */
    public function send(){
        return parent::send();
    }
}
