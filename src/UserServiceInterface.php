<?php


namespace Zyzhyh\Shimin;


interface UserServiceInterface
{
    public function add(string $name,string $phone):int;
}