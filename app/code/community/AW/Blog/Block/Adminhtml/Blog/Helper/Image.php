<?php

class AW_Blog_Block_Adminhtml_Blog_Helper_Image
    extends Varien_Data_Form_Element_Image {
    protected function _getUrl(){
        $url = false;
        if ($this->getValue()) {
            $url = Mage::getBaseUrl('media').'blogpic/'.$this->getValue();
        }
        return $url;
    }
}