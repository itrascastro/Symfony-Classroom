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

namespace AppBundle\Service;


class CalculatorService
{
    /**
     * @var int
     */
    private $op1;

    /**
     * @var int
     */
    private $op2;

    /**
     * @var int
     */
    private $result;

    /**
     * CalculatorService constructor.
     * @param int $op1
     * @param int $op2
     * @param int $result
     */
    public function __construct($op1 = null, $op2 = null, $result = null)
    {
        $this->op1 = $op1;
        $this->op2 = $op2;
        $this->result = $result;
    }

    /**
     * @return int
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param int $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = (int) $op1;
    }

    /**
     * @return int
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param int $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = (int) $op2;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param int $result
     */
    public function setResult($result)
    {
        $this->result = (int) $result;
    }

    /**
     * sum
     *
     * The Sum
     *
     */
    public function sum()
    {
        $this->setResult($this->getOp1() + $this->getOp2());
    }

    /**
     * sub
     *
     * The Sub
     *
     */
    public function sub()
    {
        $this->setResult($this->getOp1() - $this->getOp2());
    }

    /**
     * mul
     *
     * The Mul
     *
     */
    public function mul()
    {
        $this->setResult($this->getOp1() * $this->getOp2());
    }

    /**
     * div
     *
     * The Div
     *
     */
    public function div()
    {
        $this->setResult($this->getOp1() / $this->getOp2());
    }
}