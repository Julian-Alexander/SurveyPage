<?php

namespace Survey\SurveyPage\Model\ResourceModel\Answer;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
   protected function _construct()
   {
       $this->_init('Survey\SurveyPage\Model\Answer',
                    'Survey\SurveyPage\Model\ResourceModel\Answer');
   }
}
