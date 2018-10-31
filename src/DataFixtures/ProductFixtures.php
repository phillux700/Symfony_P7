<?php
/**
 * Created by PhpStorm.
 * User: leazygomalas
 * Date: 31/10/2018
 * Time: 12:43
 */

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $date = new \DateTime();

        $product1 = new Product();
        $product1->setName('Samsung Galaxy Note 32');
        $product1->setCreatedAt(new \DateTime('now'));
        $product1->setDescription('Description du Samsung Galaxy Note 32');
        $product1->setPrice('699');
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('Apple iPhone XR');
        $product2->setCreatedAt(new \DateTime('now'));
        $product2->setDescription('Description de l\'iPhone XR');
        $product2->setPrice('859');
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName('Apple iPhone 6S');
        $product3->setCreatedAt(new \DateTime('now'));
        $product3->setDescription('Description de l\'iPhone 6S');
        $product3->setPrice('419');
        $manager->persist($product3);

        $product4 = new Product();
        $product4->setName('Huawei Mate 20');
        $product4->setCreatedAt(new \DateTime('now'));
        $product4->setDescription('Description du Huawei Mate 20');
        $product4->setPrice('799');
        $manager->persist($product4);

        $product5 = new Product();
        $product5->setName('Asus ROG Phone');
        $product5->setCreatedAt(new \DateTime('now'));
        $product5->setDescription('Description du Asus ROG Phone');
        $product5->setPrice('899');
        $manager->persist($product5);

        $product6 = new Product();
        $product6->setName('Google Pixel 3');
        $product6->setCreatedAt(new \DateTime('now'));
        $product6->setDescription('Description du Google Pixel 3');
        $product6->setPrice('959');
        $manager->persist($product6);

        $product7 = new Product();
        $product7->setName('One plus 6T Midnight Black');
        $product7->setCreatedAt(new \DateTime('now'));
        $product7->setDescription('Description du One plus 6T Midnight Black');
        $product7->setPrice('799');
        $manager->persist($product7);

        $product8 = new Product();
        $product8->setName('Razer Phone 2');
        $product8->setCreatedAt(new \DateTime('now'));
        $product8->setDescription('Description du Razer Phone 2');
        $product8->setPrice('849');
        $manager->persist($product8);

        $product9 = new Product();
        $product9->setName('Crosscall Trekker-X4');
        $product9->setCreatedAt(new \DateTime('now'));
        $product9->setDescription('Description du Crosscall Trekker-X4');
        $product9->setPrice('699');
        $manager->persist($product9);

        $product10 = new Product();
        $product10->setName('Nokia 7.1');
        $product10->setCreatedAt(new \DateTime('now'));
        $product10->setDescription('Description du Nokia 7.1');
        $product10->setPrice('329');
        $manager->persist($product10);

        $manager->flush();
    }
}