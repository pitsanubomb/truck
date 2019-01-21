<?php
    class Truck{
        protected function setText($text)
        {
            // set text here
            return $text;    
        }
    }
    class TruckCopy extends Truck{
        private function setBodyColor($color)
        {
            // set color here
            return $color;
        }
        public function getTruckHtml($color, $text)
        {
            // create the truck with html here 
            return
            '<div class="truck" id="truck">
                    <div class="truck-head"></div>
                    <div class="truck-body" style="--my-truck-color: '.$this->setBodyColor($color).'"></div>
                    <div class="container">
                        <p>'
                            .$this->setText($text).
                        '</p>
                    </div>
                    <div class="back-wheel"></div>
                    <div class="front-wheel"></div>
                </div>';
        }
    }
    
    $truck_a = (new TruckCopy())->getTruckHtml('#CCE70B','Hello, Ecommerce.');
    $truck_b = (new TruckCopy())->getTruckHtml('#E5560E','Hi, Magento.');
    echo $truck_a;
    echo '<br />';
    echo $truck_b;
?>
<style>
        .truck:nth-of-type(even){
            position:absolute;
            top:40%;
        }
        .truck-head {
            position: absolute;
            top:49.4px;
            left:285px;
            width: 200px;
            height: 220px;
            background-color: skyblue;
            content: "";
            border-radius: 0 50% 50% 0;
        }
        .truck-body {
            position: absolute;
            top:50px;
            left: 0px;
            width:400px;
            height: 200px;
            background-color: var(--my-truck-color);
        }
        .truck-body::after {
            position: absolute;
            left: 0px;
            top:200px;
            width:460px;
            height: 20px;
            content: "";
            background-color: var(--my-truck-color);
        }
        .container {
            position: absolute;
            background-color:lightgray;
            height:250px;
            width:300px;
            left: 0px;
            top:0px;
            border-right: 6px solid white;
        }
        .container p {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .back-wheel {
            height: 30px;
            width: 30px;
            background-color: #bbb;
            border-radius: 50%;
            position: absolute;
            top: 265px;
            left:50px;
            z-index: -10
        }
        .back-wheel::before {
            background-color: white;
            position: absolute;
            height:30px;
            width: 2px;
            left: 48%;
            content: "";
        }

        .front-wheel {
            height: 30px;
            width: 30px;
            background-color: #bbb;
            border-radius: 50%;
            position: absolute;
            top: 265px;
            left:350px;
            z-index: -10
        }
        .front-wheel::before {
            background-color: white;
            position: absolute;
            height:30px;
            width: 2px;
            left: 48%;
        }
        
</style>
