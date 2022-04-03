<?php
/**
 * @Author: Gilang
 * @Date:   2022-04-03 16:19:43
 * @Last Modified by:   Gilang
 * @Last Modified time: 2022-04-03 22:50:48
 */
namespace Femaledaily\Address\Setup;

use Magento\Eav\Model\Config;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Entity\Attribute\SetFactory as AttributeSetFactory;

class InstallData implements InstallDataInterface
{
    /**
     * @var Config
     */
    private $eavConfig;

     /**
     * @var EavSetupFactory
     */
    private $_eavSetupFactory;

    /**
     * @var AttributeSetFactory
     */
    private $attributeSetFactory;

    /**
     * @param Config $eavConfig
     * @param EavSetupFactory $eavSetupFactory
     * @param AttributeSetFactory $attributeSetFactory
     */
    public function __construct(
        Config $eavConfig,
        EavSetupFactory $eavSetupFactory,
        AttributeSetFactory $attributeSetFactory
    ) {
        $this->eavConfig            = $eavConfig;
        $this->_eavSetupFactory     = $eavSetupFactory;
        $this->attributeSetFactory  = $attributeSetFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $eavSetup = $this->_eavSetupFactory->create(['setup' => $setup]);

        $eavSetup->addAttribute('customer_address', 'label_address', [
            'type' => 'varchar',
            'input' => 'text',
            'label' => 'Label Address',
            'visible' => true,
            'required' => false,
            'user_defined' => true,
            'system'=> false,
            'group'=> 'General',
            'global' => true,
            'visible_on_front' => true,
        ]);
       
        $customAttribute = $this->eavConfig->getAttribute('customer_address', 'label_address');

        $customAttribute->setData(
            'used_in_forms',
            ['adminhtml_customer_address','customer_address_edit','customer_address','customer_register_address'], //list of forms where you want to display the custom attribute
        );
        $customAttribute->save();
        
        $setup->endSetup();
    }
}