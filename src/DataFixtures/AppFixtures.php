<?php

namespace App\DataFixtures;

use App\Entity\Family;
use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // add famille
        $family = new Family();
        $family->setFamilyName("Servers");
        $manager->persist($family);
        $product = new Products();
        $product->setFamily($family);
        $product->setProductName("Dell Server");
        $product->setPartNumber("XP 2000");
        $product->setProductLabel("Dell Server- XP 2000");
        $product->setStartingInventory(100007)
            ->setInventoryReceived(35)
        ->setInventoryShiped(25)
        ->setInventoryOnHand(100017)
        ->setMinimumRequired(15);
        $manager->persist($product);

        $family = new Family();
        $family->setFamilyName("Cloud");
        $manager->persist($family);
        $product = new Products();
        $product->setFamily($family);
        $product->setProductName("Google Chromebooks");
        $product->setPartNumber("1");
        $product->setProductLabel("Google Chromebooks");
        $product->setStartingInventory(100)
            ->setInventoryReceived(75)
            ->setInventoryShiped(654)
            ->setInventoryOnHand(-479)
            ->setMinimumRequired(20);
        $manager->persist($product);

        $family = new Family();
        $family->setFamilyName("Router");
        $manager->persist($family);
        $product = new Products();
        $product->setFamily($family);
        $product->setProductName("Cisco Router");
        $product->setPartNumber("10x");
        $product->setProductLabel("Cisco Router");
        $product->setStartingInventory(45)
            ->setInventoryReceived(143)
            ->setInventoryShiped(76)
            ->setInventoryOnHand(86)
            ->setMinimumRequired(88);
        $manager->persist($product);

        $family = new Family();
        $family->setFamilyName("Monitor");
        $manager->persist($family);
        $product = new Products();
        $product->setFamily($family);
        $product->setProductName("Monitors");
        $product->setPartNumber("");
        $product->setProductLabel("Monitors - 999");
        $product->setStartingInventory(0)
            ->setInventoryReceived(0)
            ->setInventoryShiped(0)
            ->setInventoryOnHand(0)
            ->setMinimumRequired(0);
        $manager->persist($product);
        $manager->flush();
    }
}
