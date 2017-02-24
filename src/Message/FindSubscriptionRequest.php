<?php
namespace Omnipay\GoCardlessV2\Message;

/**
 * Find Subscription Request
 *
 */
class FindSubscriptionRequest extends AbstractRequest
{
    public function getData()
    {
        return array();
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data - completely ignored, included for consistency
     * @return SubscriptionResponse
     */
    public function sendData($data)
    {
        $response = $this->gocardless->subscriptions()->get($this->getSubscriptionID());

        return $this->response = new SubscriptionResponse($this, $response);
    }
}
