<?php
namespace Anari\Cms;
use Illuminate\Support\Facades\Facade;

class CmsFacade extends Facade
{
    protected static function getFacadeAccessor(){
        return 'Cms';
    }

}