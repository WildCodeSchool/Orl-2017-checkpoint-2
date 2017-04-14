<?php
namespace SubjectBundle\DataFixtures\ORM;

use NLF\CommitStripBundle\Entity\Card;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCardData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $stories = array(
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_1.png",
                "nbcard" => 1,
                "name" => 'premiere',
            ),
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_2.png",
                "nbcard" => 2,
                "name" => 'premiere',
            ),
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_3.png",
                "nbcard" => 3,
                "name" => 'premiere',
            ),
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_4.png",
                "nbcard" => 4,
                "name" => 'premiere',
            ),
        );

        foreach ($stories as $story){
            $card = new Card();
            $card->setPicture($story['picture']);
            $card->setNbcard($story['nbcard']);
            $card->setName($story['name']);
            $manager->persist($card);
        }
        $manager->flush();
    }
}
