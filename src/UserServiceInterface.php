<?php


namespace Zyzhyh\Shimin;


interface UserServiceInterface
{
    public function add(string $name,string $phone):int;

    public function info(int $user_id):array;
}