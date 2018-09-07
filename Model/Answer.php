<?php

namespace Survey\SurveyPage\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Survey\SurveyPage\Api\Data\AnswerInterface;

class Answer extends AbstractModel implements AnswerInterface, IdentityInterface
{
   const CACHE_TAG = 'survey_results';
   protected function _construct()
   {
       $this->_init('Survey\SurveyPage\Model\ResourceModel\Answer');
   }

   public function getId()
   {
       return $this->getData(self::ANSWER_ID);
   }

   public function setId($id)
   {
       return $this->setData(self::ANSWER_ID, $id);
   }

   public function getRating()
   {
       return $this->getData(self::RATING);
   }

   public function setRating($rating)
   {
       return $this->setData(self::RATING, $rating);
   }

   public function getMessage()
   {
       return $this->getData(self::MESSAGE);
   }

   public function setMessage($message)
   {
       return $this->setData(self::MESSAGE, $message);
   }

   public function getProductId()
   {
       return $this->getData(self::PRODUCT_ID);
   }

   public function setProductId($product_id)
   {
       return $this->setData(self::PRODUCT_ID, $product_id);
   }

   public function getIdentities()
   {
       return [self::CACHE_TAG . '_' . $this->getId()];
   }
}
