<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * indexAction
     *
     * Shows Calculator Menu
     *
     * @Route(
     *     path = "/",
     *     name = "app_calculator_index"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render(':calculator:index.html.twig');
    }

    /**
     * sumAction
     *
     * Shows Calculator Form
     *
     * @Route(
     *     path = "/sum",
     *     name = "app_calculator_sum"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sumAction()
    {
        return $this->render(':calculator:form.html.twig',
            [
                'action' => 'app_calculator_doSum'
            ]
        );
    }

    /**
     * doSumAction
     *
     * Shows the sum result
     *
     * @Route(
     *     path = "/do-sum",
     *     name = "app_calculator_doSum"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doSumAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $calculator = $this->get('calculator');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->sum();
        $result = $calculator->getResult();

        return $this->render(':calculator:result.html.twig',
            [
                'result'    => $result,
                'op1'       => $op1,
                'op2'       => $op2,
                'operation' => '+',
            ]
        );
    }
}
