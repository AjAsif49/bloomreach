<?php

// File generated from our OpenAPI spec

namespace EDD\Vendor\Stripe\Service;

/**
 * @phpstan-import-type RequestOptionsArray from \EDD\Vendor\Stripe\Util\RequestOptions
 * @psalm-import-type RequestOptionsArray from \EDD\Vendor\Stripe\Util\RequestOptions
 */
class TaxRateService extends \EDD\Vendor\Stripe\Service\AbstractService
{
    /**
     * Returns a list of your tax rates. Tax rates are returned sorted by creation
     * date, with the most recently created tax rates appearing first.
     *
     * @param null|array $params
     * @param null|RequestOptionsArray|\EDD\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \EDD\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \EDD\Vendor\Stripe\Collection<\EDD\Vendor\Stripe\TaxRate>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/tax_rates', $params, $opts);
    }

    /**
     * Creates a new tax rate.
     *
     * @param null|array $params
     * @param null|RequestOptionsArray|\EDD\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \EDD\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \EDD\Vendor\Stripe\TaxRate
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/tax_rates', $params, $opts);
    }

    /**
     * Retrieves a tax rate with the given ID.
     *
     * @param string $id
     * @param null|array $params
     * @param null|RequestOptionsArray|\EDD\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \EDD\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \EDD\Vendor\Stripe\TaxRate
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/tax_rates/%s', $id), $params, $opts);
    }

    /**
     * Updates an existing tax rate.
     *
     * @param string $id
     * @param null|array $params
     * @param null|RequestOptionsArray|\EDD\Vendor\Stripe\Util\RequestOptions $opts
     *
     * @throws \EDD\Vendor\Stripe\Exception\ApiErrorException if the request fails
     *
     * @return \EDD\Vendor\Stripe\TaxRate
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/tax_rates/%s', $id), $params, $opts);
    }
}
