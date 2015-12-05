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
        $a1->setTitle('a1 title');
        $m->persist($a1);

        $a2 = new Article();
        $a2->setTitle('a2 title');
        $m->persist($a2);

        $t1 = new Tag();
        $t1->setName('tag1');

        $t2 = new Tag();
        $t2->setName('tag2');

        $t3 = new Tag();
        $t3->setName('tag3');

        $a1
            ->addTag($t1)
            ->addTag($t2)
        ;

        $a2
            ->addTag($t2)
            ->addTag($t3)
        ;

        $m->flush();
    }

}