<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductsRepository")
 */
class Products
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
    private $product_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $part_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $product_label;

    /**
     * @ORM\Column(type="integer")
     */
    private $starting_inventory;

    /**
     * @ORM\Column(type="integer")
     */
    private $inventory_received;

    /**
     * @ORM\Column(type="integer")
     */
    private $inventory_on_hand;
    /**
     * @ORM\Column(type="integer")
     */
    private $inventory_shiped;

    /**
     * @return mixed
     */
    public function getInventoryShiped()
    {
        return $this->inventory_shiped;
    }

    /**
     * @param mixed $inventory_shiped
     * @return Products
     */
    public function setInventoryShiped($inventory_shiped)
    {
        $this->inventory_shiped = $inventory_shiped;
        return $this;
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $minimum_required;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Family", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $family;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->product_name;
    }

    public function setProductName(string $product_name): self
    {
        $this->product_name = $product_name;

        return $this;
    }

    public function getPartNumber(): ?string
    {
        return $this->part_number;
    }

    public function setPartNumber(string $part_number): self
    {
        $this->part_number = $part_number;

        return $this;
    }

    public function getProductLabel(): ?string
    {
        return $this->product_label;
    }

    public function setProductLabel(string $product_label): self
    {
        $this->product_label = $product_label;

        return $this;
    }

    public function getStartingInventory(): ?int
    {
        return $this->starting_inventory;
    }

    public function setStartingInventory(int $starting_inventory): self
    {
        $this->starting_inventory = $starting_inventory;

        return $this;
    }

    public function getInventoryReceived(): ?int
    {
        return $this->inventory_received;
    }

    public function setInventoryReceived(int $inventory_received): self
    {
        $this->inventory_received = $inventory_received;

        return $this;
    }

    public function getInventoryOnHand(): ?int
    {
        return $this->inventory_on_hand;
    }

    public function setInventoryOnHand(int $inventory_on_hand): self
    {
        $this->inventory_on_hand = $inventory_on_hand;

        return $this;
    }

    public function getMinimumRequired(): ?int
    {
        return $this->minimum_required;
    }

    public function setMinimumRequired(?int $minimum_required): self
    {
        $this->minimum_required = $minimum_required;

        return $this;
    }

    public function getFamily(): ?Family
    {
        return $this->family;
    }

    public function setFamily(?Family $family): self
    {
        $this->family = $family;

        return $this;
    }
}
