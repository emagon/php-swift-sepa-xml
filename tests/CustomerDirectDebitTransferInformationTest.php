<?php

namespace tests;

use Pepperbay\Common\TransferInformation\CustomerDirectDebitTransferInformation;

class CustomerDirectDebitTransferInformationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests whether the EndToEndId equals the name if no other identifier was supplied
     */
    public function testEndToEndIndentifierEqualsName()
    {
        $information = new CustomerDirectDebitTransferInformation(100, 'DE12500105170648489890', 'Their Corp');
        $this->assertEquals('Their Corp', $information->getEndToEndIdentification());
    }

    /**
     * Tests whether the EndToEndId equals the supplied EndToEndId
     */
    public function testOptionalEndToEndIdentifier()
    {
        $information = new CustomerDirectDebitTransferInformation(100, 'DE12500105170648489890', 'Their Corp', 'MyEndToEndId');
        $this->assertEquals('MyEndToEndId', $information->getEndToEndIdentification());
    }
}
