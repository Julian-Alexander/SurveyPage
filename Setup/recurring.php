<?php

namespace Survey\SurveyPage\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\App\ResourceConnection;

class Recurring implements InstallSchemaInterface
{
 const ANSWER_TABLE = 'survey_answer';
 private $coreResource;
 public function __construct(ResourceConnection $coreResource) 
 {
     $this->coreResource = $coreResource;
 }

     public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
        {
           $setup->startSetup();
$connection = $this->coreResource->getConnection();
        
if ($connection->isTableExists(self::ANSWER_TABLE)) {
               $connection->dropTable(self::ANSWER_TABLE);
         }
         $surveyTable = $connection->newTable(
            self::ANSWER_TABLE
            )->addColumn(
                         ‘answer_id’,
                         Table::TYPE_INTEGER,
                         null,
                         ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                         'Answer ID'
                      
            // build up your DB schema here
                   );
                   $connection->createTable($surveyTable);
            
                   $setup->endSetup();
               }
            }
            