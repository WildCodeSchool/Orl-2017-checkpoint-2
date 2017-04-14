<?php

namespace SubjectBundle\Controller;

use SubjectBundle\Service\Order\OrderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use LogicException as AlgoException;

class AlgoController extends Controller
{
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    /**
     * @var OrderInterface
     */
    private $orderService;

    /**
     * @return OrderInterface
     */
    public function getOrderService(): OrderInterface
    {
        return $this->orderService;
    }

    /**
     * @param OrderInterface $orderService
     * @return AlgoController
     */
    public function setOrderService(OrderInterface $orderService): AlgoController
    {
        $this->orderService = $orderService;
        return $this;
    }



    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //
    public function strlenOrder($string, $order)
    {
        // Si le tri est inconnu on lève une exception.
        if ($order != strtoupper(self::ORDER_ASC) && $order != strtoupper(self::ORDER_DESC)) {
            throw new AlgoException('Unknown order type');
        }

        // On génère la classe le nom de la classe à instancier.
        $orderServiceClass = 'SubjectBundle\\Service\\Order\\'.ucfirst(strtolower($order));

        // On l'instancie.
        $orderService = new $orderServiceClass();

        // Puis on trie.
        $orderedString = $orderService->sort($string);

        // Enfin on retourne le résultat trié.
        return $orderedString;
    }
}
