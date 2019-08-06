<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * @ORM\Table("`order`")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $middle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_shipped;

    /**
     * @ORM\Column(type="datetime")
     */
    private $order_date;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFirst(): ?string
    {
        return $this->first;
    }

    public function setFirst(string $first): self
    {
        $this->first = $first;

        return $this;
    }

    public function getMiddle(): ?string
    {
        return $this->middle;
    }

    public function setMiddle(string $middle): self
    {
        $this->middle = $middle;

        return $this;
    }

    public function getLast(): ?string
    {
        return $this->last;
    }

    public function setLast(string $last): self
    {
        $this->last = $last;

        return $this;
    }

    /**
     * @return Collection|products[]
     */
    public function getProduct(): Products
    {
        return $this->product;
    }

    public function setProduct(products $product): self
    {
        $this->product = $product;
        return $this;
    }

    public function getNumberShipped(): ?int
    {
        return $this->number_shipped;
    }

    public function setNumberShipped(int $number_shipped): self
    {
        $this->number_shipped = $number_shipped;
        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->order_date;
    }

    public function setOrderDate(\DateTimeInterface $order_date): self
    {
        $this->order_date = $order_date;

        return $this;
    }
}
