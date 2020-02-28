<?php
// chek if there is something in $_GET array under the key: id
// if not, loop through $products and parse the data into the desired markup



    $markUp = "";
   if(!isset($_GET['prod-id'])){
    
    
    foreach($items as $value){
        $markUp .= "<div class='col-lg-3 col-md-6 col-sm-12 product'>
                        <figure>
                            <img src='{$value['image']}' alt='{$value['name']}' >
                            <figcaption>
                                <ul>
                                    <li>{$value['name']}</li>
                                    <li>{$value['price']}</li>
                                </ul>
                            </figcaption>
                        </figure>
                      </div>";
    }
   }else {
	   $selectedItems = [];
    foreach ($items as $value) {
        if ($_GET["prod-id"] === $value["code"]) {
            array_push($selectedItems, $value);
        }
    }
	   foreach($selectedItems as $value){
        $markUp .= "<div class='col-lg-3 col-md-6 col-sm-12 product'>
                        <figure>
                            <img src='{$value['image']}' alt='{$value['name']}' >
                            <figcaption>
                                <ul>
                                    <li>{$value['name']}</li>
                                    <li>{$value['price']}</li>
                                </ul>
                            </figcaption>
                        </figure>
                      </div>";
    }
   }
//echo $markUp;
?>
