<?php
/**
 * @Author: Gilang
 * @Date:   2022-04-03 16:19:43
 * @Last Modified by:   Gilang
 * @Last Modified time: 2022-04-03 22:50:18
 */

namespace Femaledaily\Address\Controller\Adminhtml\Log;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    /**
     * @var \Magento\Backend\App\Action\Context
     */
    private $context;

    /**
     * Index constructor.
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Backend\App\Action\Context $context
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->context = $context;

    }

    /**
     * @return mixed
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Femaledaily_Address::menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Customer Address Access Log'));
        
        return $resultPage;
    }

    /**
     * @return mixed
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Femaledaily_Address::menu');
    }
}
