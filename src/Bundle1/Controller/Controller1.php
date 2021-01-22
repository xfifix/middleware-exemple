<?php

namespace App\Bundle1\Controller;

use App\Bundle1\Event\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Controller1.
 *
 */
class Controller1 extends AbstractController
{

  /**
   * @var MessageBusInterface
   */
  private $eventBus;

  /**
   * @param MessageBusInterface $eventBus
   */
  public function __construct(
    MessageBusInterface $eventBus
  ) {
    $this->eventBus = $eventBus;
  }

  /**
   * @Route(
   *     "/test",
   *     name="test",
   *     methods={"GET"}
   *     )
   *
   *
   * @return Response
   */
  public function test(): Response
  {
    $this->eventBus->dispatch(new Event());
    return new Response('test');
  }

}
