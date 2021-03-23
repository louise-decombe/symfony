<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      for($i = 1; $i <= 10; $i++){
          $article = new Article();
          $article->setTitle("Titre de l'article n°$i ")
              ->setText("Mauris interdum tempus nulla sit amet convallis. Aliquam mollis ipsum non tortor commodo, imperdiet tincidunt dolor fringilla. Curabitur non elit in sapien vulputate gravida. Aliquam in tellus id velit vestibulum vulputate a non purus. Donec malesuada dapibus diam, vel pretium odio faucibus in. Mauris euismod vitae justo non varius. Curabitur pretium id metus vitae maximus. Integer nunc leo, pharetra a dictum nec, ornare at ante. Integer vehicula erat non magna mollis lacinia. Aenean ac maximus elit. Aenean molestie eget leo viverra tristique. Quisque non turpis neque. Aliquam ut porttitor sapien, sit amet sollicitudin sem. Suspendisse lobortis diam nec turpis maximus fermentum eu ac eros. Morbi sed ante lacus. n°$i")
              ->setImage("http://placehold.it/350x150")
              ->setCreatedAt(new \DateTime())
              ->setCategory(1)
              ->setCategory( Category::class)
              ->setSubtitle("Description de l'article n°$i");




          $manager->persist($article);

      }

        $manager->flush();
    }
}
