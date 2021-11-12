<?php

class AppartmentsSale
{
    /***
     * Сумма продажи квартиры, ркбли
     * <input type=number>
     * @var int
     */
    private $sum = 0;

    /***
     * Номер договора о продаже
     * varchar, 255, <input type=select>
     * @var string
     */
    private $contractNumber = '';

    /***
     * Номер квартиры
     * <input type=number>
     * @var int
     */
    private $appartmentNumber = 0;

    /***
     * Имя жилого комплекса
     * varchar, 255, <input type=text>
     * @var int
     */
    private $homeComplexName = '';

}