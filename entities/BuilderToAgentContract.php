<?php

class BuilderToAgentContract
{
    const FIXED_PAYMENT = 'fixed_payment';
    const PERCENT_PAYMENT = 'percent_payment';

    /***
     * Номер договора о продаже
     * PrimaryKey, varchar, 255, <input type=text>
     * @var string
     */
    private $number = '';

    /***
     * Данные агента
     * varchar, 255, <input type=text>
     * @var string
     */
    private $agent = '';

    /***
     * Назване жилого комплекса
     * varchar, 255, <input type=text>
     * @var string
     */
    private $homeComplex = '';

    /***
     * Тип оплаты (фиксированная или %)
     * принимает значения FIXED_PAYMENT или PERCENT_PAYMENT
     * varchar, 255, <input type=select>
     * @var string
     */
    private $paymentType = '';

    /***
     * Размер вознаграждения
     * int - для фиксированной/decimal - для процентной, <input type=number>
     * - При фиксированной оплате - от 0 до 1000000 рублей
     * - При процентах - от 0 до 10
     * @var int
     */
    private $rewardSize = 0;

    /***
     * Дата конца контракта
     * datetime, <input type=datetime-local>
     * @var DateTime
     */
    private $expirationDate = null;

    /***
     * Дата заключения контракта
     * datetime, <input type=datetime-local>
     * @var DateTime
     */
    private $creationDate = null;
}