<?php


class A
{
    public function foo()
    {
        static $x = 0; // статик переменная сохраняет новые значения и является общей для всех объектов относящихся к одному классу (принадлежит классу)
        echo ++$x;
    }
}