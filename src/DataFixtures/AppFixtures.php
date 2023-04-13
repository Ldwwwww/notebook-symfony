<?php

namespace App\DataFixtures;
use App\Entity\Category;
use App\Entity\Note;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Length;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i <50 ; $i++) {
         $note = new Note();
         $note->setTitle('My first note')
        ->setContent('this is my first note')
        ->setCreatedAt (new \DateTimeImmutable('now'))
        ->setUpdateAt (new \DateTimeImmutable('now'))
        ->setAuthor('Jensone');
        $manager->persist($note);
    }

    $categorie = ["PHP" ,"symphony" , "doctrine" , "twig" , "Mysql" , "JavaScript" , "React" , "Vue" , "Angular" , "NodeJs"];
    $color =["black" , "red" , "green" , "blue" , "green" , "magenta" , "yellow", "orange" , "olive" , "purple" , "teal" , "white" , "maroon" , "aqua"];

 

        for ($i=0 ; $i <count($categorie) ; $i++) {
            $category = new Category();
            $category->setTitle($categorie[$i])
            ->setColor($color[array_rand($color)]);
            
            $manager->persist($category);
        }
        

       
        $manager->flush();

    }

}