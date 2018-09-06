<?php

namespace Toptal\Blog\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class UpgradeData
 *
 * @package Toptal\Blog\Setup
 */
class UpgradeData implements UpgradeDataInterface
{

    /**
     * Creates sample blog posts
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if ($context->getVersion()
            && version_compare($context->getVersion(), '0.1.1') < 0
        ) {
            $tableName = $setup->getTable('toptal_blog_post');

            $data = [
                [
                    'question1' => 'Which type of products do you prefer?',
                    'answer1' => 'First answer',
                ],
                [
                    'question2' => 'How often do you shop online?',
                    'answer2' => 'Second answer',
                ],
                [
                    'question3' => 'Are you interested in marketing material?',
                    'answer3' => 'Third answer',
                ],
                [
                    'question4' => 'Would you like to have a referal system?',
                    'answer4' => 'Fourth answer',
                ],
            ];

            $setup
                ->getConnection()
                ->insertMultiple($tableName, $data);
        }

        $setup->endSetup();
    }
}