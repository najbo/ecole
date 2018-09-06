<?php 
class Cms5b8d82a57b087899164280_92852c5e5cf842dbb3932b050fcc8963Class extends Cms\Classes\PageCode
{
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $operation = post('operation');

    switch ($operation) {
        case '+' :
            $this['result'] = $value1 + $value2;
            break;
        case '-' :
            $this['result'] = $value1 - $value2;
            break;
        case '*' :
            $this['result'] = $value1 * $value2;
            break;
        default :
            $this['result'] = $value1 / $value2;
            break;
    }
}
}
