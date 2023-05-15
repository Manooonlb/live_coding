<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 5;++$i) 
        {
            $article = new Article();
            $article->setTitle("Title-$i")->setDescription("Description-$i");
            $manager->persist($article);
        }

        $manager->flush();
    }
}
