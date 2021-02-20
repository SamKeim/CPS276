<?
    class NameProcessor {
        public static function processForm($arr){
            // determine which button was hit
            if($arr["button"] == "Clear Names"){
                $arr["namesList"] = "";
            } else {
                // process name
                $sepName = explode(" ", $arr["name"]);
                $arr["name"] =  $sepName[1] . ", " . $sepName[0];
                
                // check if list is empty
                if($arr["nameList"] != ""){
                    // explode list
                    $nameList = explode("\n", $arr["nameList"]);
                }
                
                // add to list
                $nameList[] = $arr["name"];
                
                // organize list
                sort($nameList);
                
                // reform list to string
                $arr["namesList"] = implode("\n", $nameList);
            }
            // return $arr
            return $arr;
        }
    }



?>