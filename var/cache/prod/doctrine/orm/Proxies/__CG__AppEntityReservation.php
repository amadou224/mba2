<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reservation extends \App\Entity\Reservation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'horraire', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'nbPassager', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'dateReservation', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'dateDepart', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'pointDePrise', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'commentaire', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'departDestination', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'trajet', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'facture', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'codepostal', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'pays'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'horraire', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'nbPassager', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'dateReservation', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'dateDepart', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'pointDePrise', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'commentaire', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'user', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'departDestination', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'trajet', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'facture', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'codepostal', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'pays'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reservation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getHorraire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHorraire', []);

        return parent::getHorraire();
    }

    /**
     * {@inheritDoc}
     */
    public function setHorraire(string $horraire): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHorraire', [$horraire]);

        return parent::setHorraire($horraire);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbPassager(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbPassager', []);

        return parent::getNbPassager();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbPassager(int $nbPassager): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbPassager', [$nbPassager]);

        return parent::setNbPassager($nbPassager);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateReservation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateReservation', []);

        return parent::getDateReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateReservation(\DateTimeInterface $dateReservation): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateReservation', [$dateReservation]);

        return parent::setDateReservation($dateReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDepart(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDepart', []);

        return parent::getDateDepart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDepart(\DateTimeInterface $dateDepart): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDepart', [$dateDepart]);

        return parent::setDateDepart($dateDepart);
    }

    /**
     * {@inheritDoc}
     */
    public function getPointDePrise(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPointDePrise', []);

        return parent::getPointDePrise();
    }

    /**
     * {@inheritDoc}
     */
    public function setPointDePrise(string $pointDePrise): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPointDePrise', [$pointDePrise]);

        return parent::setPointDePrise($pointDePrise);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', []);

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentaire(?string $commentaire): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentaire', [$commentaire]);

        return parent::setCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartDestination(): ?\App\Entity\departDestination
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartDestination', []);

        return parent::getDepartDestination();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartDestination(\App\Entity\departDestination $departDestination): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartDestination', [$departDestination]);

        return parent::setDepartDestination($departDestination);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrajet(): ?\App\Entity\trajet
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrajet', []);

        return parent::getTrajet();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrajet(?\App\Entity\trajet $trajet): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrajet', [$trajet]);

        return parent::setTrajet($trajet);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacture(): ?\App\Entity\facture
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacture', []);

        return parent::getFacture();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacture(?\App\Entity\facture $facture): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacture', [$facture]);

        return parent::setFacture($facture);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(?string $adresse): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodepostal(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodepostal', []);

        return parent::getCodepostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodepostal(?string $codepostal): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodepostal', [$codepostal]);

        return parent::setCodepostal($codepostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(?string $ville): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(?string $pays): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
