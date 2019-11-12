<?php

declare(strict_types=1);
namespace Signup\RezaModule\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

/**
 * Class UpgradeData
 * @package Signup\RezaModule\Setup
 */
class UpgradeData implements UpgradeDataInterface
{
<<<<<<< HEAD
=======

>>>>>>> 50d2d3d4c66f2cbfbef09c068b1fb6b64c88ae24
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->update(
                $setup->getTable('signup_rezamodule_item'),
                [
                    'Lastname' => 'jones'
                ],
                $setup->getConnection()->quoteInto('id = ?', 1)
            );
        }

        $setup->endSetup();
    }
}
