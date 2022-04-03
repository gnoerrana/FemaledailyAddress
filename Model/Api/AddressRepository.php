<?php
/**
 * @Author: Gilang
 * @Date:   2022-04-03 16:19:43
 * @Last Modified by:   Gilang
 * @Last Modified time: 2022-04-03 22:50:28
 */
 
namespace Femaledaily\Address\Model\Api;

class AddressRepository
{
    protected $customerRepository;

    public function __construct(
    \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
	) {
	    $this->customerRepository = $customerRepository;
	}

    public function getCustomerAddresses($customerId)
    {
        $addressesList = [];
        $customer = $this->customerRepository->getById($customerId);
		/** @var \Magento\Customer\Api\Data\AddressInterface $address */
		foreach ($customer->getAddresses() as $address) {		   
		    $addressesList[] = $address->getStreet();
		}

        return $addressesList;
    }
}