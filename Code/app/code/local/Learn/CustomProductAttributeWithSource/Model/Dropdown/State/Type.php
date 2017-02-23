<?php
class Learn_CustomProductAttributeWithSource_Model_Dropdown_State_Type extends Mage_Core_Model_Abstract 
{


    /**
     * Retrieve all options array
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (is_null($this->_options)) {
            $this->_options = array(
                array(
                    "value" => "",
                    "label" => Mage::helper("eav")->__("-- Select --")
                ),
                array(
                    "value" => "AP",
                    "label" => Mage::helper("eav")->__("Andhra Pradesh")
                ),
                array(
                    "value" => "AR",
                    "label" => Mage::helper("eav")->__("Arunachal Pradesh")
                ),
                array(
                    "value" => "AS",
                    "label" => Mage::helper("eav")->__("Assam")
                ),
                array(
                    "value" => "BR",
                    "label" => Mage::helper("eav")->__("Bihar")
                ),
                array(
                    "value" => "CG",
                    "label" => Mage::helper("eav")->__("Chhattisgarh")
                ),
                array(
                    "value" => "GA",
                    "label" => Mage::helper("eav")->__("Goa")
                ),
                array(
                    "value" => "GJ",
                    "label" => Mage::helper("eav")->__("Gujarat")
                ),
                array(
                    "value" => "HR",
                    "label" => Mage::helper("eav")->__("Haryana")
                ),
                array(
                    "value" => "HP",
                    "label" => Mage::helper("eav")->__("Himachal Pradesh")
                ),
                array(
                    "value" => "JK",
                    "label" => Mage::helper("eav")->__("Jammu and Kashmir")
                ),
                array(
                    "value" => "JH",
                    "label" => Mage::helper("eav")->__("Jharkhand")
                ),
                array(
                    "value" => "KA",
                    "label" => Mage::helper("eav")->__("Karnataka")
                ),
                array(
                    "value" => "KL",
                    "label" => Mage::helper("eav")->__("Kerala")
                ),
                array(
                    "value" => "MP",
                    "label" => Mage::helper("eav")->__("Madhya Pradesh")
                ),
                array(
                    "value" => "MH",
                    "label" => Mage::helper("eav")->__("Maharashtra")
                ),
                array(
                    "value" => "MN",
                    "label" => Mage::helper("eav")->__("Manipur")
                ),
                array(
                    "value" => "ML",
                    "label" => Mage::helper("eav")->__("Meghalaya")
                ),
                array(
                    "value" => "MZ",
                    "label" => Mage::helper("eav")->__("Mizoram")
                ),
                array(
                    "value" => "NL",
                    "label" => Mage::helper("eav")->__("Nagaland")
                ),
                array(
                    "value" => "OR",
                    "label" => Mage::helper("eav")->__("Orissa")
                ),
                array(
                    "value" => "PB",
                    "label" => Mage::helper("eav")->__("Punjab")
                ),
                array(
                    "value" => "RJ",
                    "label" => Mage::helper("eav")->__("Rajasthan")
                ),
                array(
                    "value" => "SK",
                    "label" => Mage::helper("eav")->__("Sikkim")
                ),
                array(
                    "value" => "UK",
                    "label" => Mage::helper("eav")->__("Uttarakhand")
                ),
                array(
                    "value" => "UP",
                    "label" => Mage::helper("eav")->__("Uttar Pradesh")
                ),
                array(
                    "value" => "WB",
                    "label" => Mage::helper("eav")->__("West Bengal")
                ),
                array(
                    "value" => "TN",
                    "label" => Mage::helper("eav")->__("Tamil Nadu")
                ),
                array(
                    "value" => "TR",
                    "label" => Mage::helper("eav")->__("Tripura")
                ),
                array(
                    "value" => "AN",
                    "label" => Mage::helper("eav")->__("Andaman and Nicobar Islands")
                ),
                array(
                    "value" => "CH",
                    "label" => Mage::helper("eav")->__("Chandigarh")
                ),
                array(
                    "value" => "DH",
                    "label" => Mage::helper("eav")->__("Dadra and Nagar Haveli")
                ),
                array(
                    "value" => "DD",
                    "label" => Mage::helper("eav")->__("Daman and Diu")
                ),
                array(
                    "value" => "DL",
                    "label" => Mage::helper("eav")->__("Delhi")
                ),
                array(
                    "value" => "LD",
                    "label" => Mage::helper("eav")->__("Lakshadweep")
                ),
                array(
                    "value" => "PY",
                    "label" => Mage::helper("eav")->__("Pondicherry")
                ),
            );
        }
        return $this->_options;
    }

    /**
     * Retrieve option array
     *
     * @return array
     */
    public function getOptionArray()
    {
        $_options = array();
        foreach ($this->getAllOptions() as $option) {
            $_options[$option["value"]] = $option["label"];
        }
        return $_options;
    }

    /**
     * Get a text for option value
     *
     * @param string|integer $value
     * @return string
     */
    public function getOptionText($value) {
        $options = $this->getAllOptions();
        foreach ($options as $option) {
            if ($option["value"] == $value) {
                return $option["label"];
            }
        }
        return false;
    }
}
