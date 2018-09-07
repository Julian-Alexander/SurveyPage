<?php

namespace Survey\SurveyPage\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Answer extends AbstractDb
{
   protected function _construct()
   {
       $this->_init('survey_results', 'answer_id');
   }
}
