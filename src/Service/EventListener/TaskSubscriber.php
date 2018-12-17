<?php
/**
 * Created by PhpStorm.
 * User: julienbutty
 * Date: 03/11/2018
 * Time: 19:18
 */

namespace App\Service\EventListener;


use App\Entity\Task;
use Doctrine\Common\Cache\PredisCache;
use Doctrine\Common\Cache\RedisCache;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Predis\Client;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;

class TaskSubscriber
{
    private $cacheDriver;

    public function __construct($cacheDriver)
    {
        $this->cacheDriver = $cacheDriver;
    }


    public function postPersist(Task $task, LifecycleEventArgs $args)
    {

        $this->cacheDriver->expire('[tasks_all][1]', 0);

    }

    public function postUpdate(Task $task, LifecycleEventArgs $args)
    {

        $this->cacheDriver->expire('[tasks_all][1]', 0);
    }

    public function postRemove(Task $task, LifecycleEventArgs $args)
    {

        $this->cacheDriver->expire('[tasks_all][1]', 0);
    }
}