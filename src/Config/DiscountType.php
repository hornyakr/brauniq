<?php

namespace App\Config;

enum DiscountType: string
{
case Amount = "amount";
case Percent = "percent";
case TwoPlusOne = "2 + 1";
}