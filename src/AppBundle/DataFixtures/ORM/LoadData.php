<?php
/**
 * (c) Ismael Trascastro <i.trascastro@gmail.com>
 *
 * @link        http://www.ismaeltrascastro.com
 * @copyright   Copyright (c) Ismael Trascastro. (http://www.ismaeltrascastro.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Article;
use AppBundle\Entity\Tag;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $m)
    {
        $a1 = new Article();
        $a1->setTitle('Boston Celtics NBA Champions');
        $m->persist($a1);

        $a2 = new Article();
        $a2->setTitle('Marcus Smart named player of the month');
        $m->persist($a2);

        $a3 = new Article();
        $a3->setTitle('Symfony 3 is here');
        $m->persist($a3);

        $t1 = new Tag();
        $t1->setName('Boston Celtics');

        $t2 = new Tag();
        $t2->setName('NBA');

        $t3 = new Tag();
        $t3->setName('Sports');

        $t4 = new Tag();
        $t4->setName('Symfony');

        $t5 = new Tag();
        $t5->setName('PHP');

        $t6 = new Tag();
        $t6->setName('Programming');

        $a1
            ->addTag($t1)
            ->addTag($t2)
            ->addTag($t3)
        ;

        $a2
            ->addTag($t1)
            ->addTag($t2)
            ->addTag($t3)
        ;

        $a3
            ->addTag($t4)
            ->addTag($t5)
            ->addTag($t6)
        ;


        $m->flush();
    }

}