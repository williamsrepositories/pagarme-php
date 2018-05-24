<?php

namespace PagarMe\Sdk\Customer;

class Customer
{
    use \PagarMe\Sdk\Fillable;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $country;

    /**
     * @var array
     */
    private $phoneNumbers;

    /**
     * @var array
     */
    private $documents;

    /**
     * @var PagarMe\Sdk\Customer\Address
     */
    private $address;

    /**
     * @var string
     */
    private $bornAt;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var int
     */
    private $documentNumber;

    /**
     * @var string
     */
    private $documentType;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $name;

    /**
     * @var PagarMe\Sdk\Customer\Phone
     */
    private $phone;

    /**
     * @param array $arrayData
     */
    public function __construct($arrayData)
    {
        $this->fill($arrayData);
    }

    /**
     * @codeCoverageIgnore
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getBornAt()
    {
        return $this->bornAt;
    }

    /**
     * @codeCoverageIgnore
     * @return int
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @codeCoverageIgnore
     * @return object
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
}
