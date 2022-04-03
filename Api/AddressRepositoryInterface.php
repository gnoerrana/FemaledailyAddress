<?php
/**
 * @Author: Gilang
 * @Date:   2022-04-03 16:19:43
 * @Last Modified by:   Gilang
 * @Last Modified time: 2022-04-03 22:50:12
 */
 
namespace Femaledaily\Address\Api;

use Magento\Customer\Api\Data\AddressInterface;
use Femaledaily\Address\Model\Api\AddressRepository;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface AddressRepositoryInterface
 * @package Deity\CustomerApi\Api
 */
interface AddressRepositoryInterface
{
 
    /**
     * @param int $customerId
     * @return Femaledaily\Address\Model\Api\AddressRepository
     */
    public function getCustomerAddresses($customerId);

}