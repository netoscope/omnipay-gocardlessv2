<?php
namespace Omnipay\GoCardlessV2\Message;

/**
 * Find Customer Request
 *
 * @method CustomerResponse send()
 */
class FindEventRequest extends AbstractRequest
{
    public function getData()
    {
        return array();
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data - completely ignored, included for consistency
     * @return EventResponse
     */
    public function sendData($data)
    {
        $response = $this->gocardless->events()->get($this->getEventId());

        return $this->response = new EventResponse($this, $response);
    }
}
