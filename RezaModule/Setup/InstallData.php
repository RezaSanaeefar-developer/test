<?php

declare(strict_types=1);
namespace Signup\RezaModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 * @package Signup\RezaModule\Setup
 */
class InstallData implements InstallDataInterface
{
<<<<<<< HEAD
=======

>>>>>>> 50d2d3d4c66f2cbfbef09c068b1fb6b64c88ae24
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('signup_rezamodule_item'),
            [
                'name' => 'order 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('signup_rezamodule_item'),
            [
                'name' => 'order 2'
            ]
        );

        $setup->endSetup();
    }
}
