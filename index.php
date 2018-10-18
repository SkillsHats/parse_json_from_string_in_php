<?php
  
  $data = '{"Coords":[{"Accuracy":"65","Latitude":"53.2777204884","Longitude":"-9.012038778","Timestamp":"Thu Oct 18 2018 11:49:34 GMT+0100 (IST)"},{"Accuracy":"75","Latitude":"53.277720488429026","Longitude":"-9.012038778269686","Timestamp":"Thu Oct 18 2018 11:49:34 GMT+0100 (IST)"},{"Accuracy":"55","Latitude":"53.27770755361785","Longitude":"-9.011979642121824","Timestamp":"Thu Oct 18 2018 11:49:34 GMT+0100 (IST)"},{"Accuracy":"85","Latitude":"53.27769091555766","Longitude":"-9.012051410095722","Timestamp":"Thu Oct 18 2018 11:49:34 GMT+0100 (IST)"},{"Accuracy":"95","Latitude":"53.27769091555766","Longitude":"-9.012051410095722","Timestamp":"Thu Oct 18 2018 11:49:34 GMT+0100 (IST)"}]}';

 /* ================================================================================= */

  $json =  json_decode($data);
  echo '<pre>';
  
  /** This will return Std Object **/
    
  echo "Accuracy : " . $json->Coords[0]->Accuracy . '<br>';
  echo "Latitude : " . $json->Coords[0]->Latitude . '<br>';
  echo "Longitude : ". $json->Coords[0]->Longitude . '<br>';
  echo "Timestamp : ". $json->Coords[0]->Timestamp . '<br>';

  echo "<hr>";

  print_r( $json);
  
 /* =================================================================================== */
 
   /** This will return an ARRAY **/
  $json =  json_decode($data,true);
  echo '<pre>';

  /** Access properties using KEY **/
  
  echo "Accuracy : ". $json['Coords'][0]['Accuracy'].'<br>';
  echo "Latitude : ". $json['Coords'][0]['Latitude'].'<br>';
  echo "Longitude : ". $json['Coords'][0]['Longitude'].'<br>';
  echo "Timestamp : ". $json['Coords'][0]['Timestamp'].'<br>';

  echo "<hr>";

  print_r( $json);
  
  /* =================================================================================== */
  
   /**                       Loop All Data                                              **/
          
   /**           Get lenght of an array -> count($json['Coords'])                       **/
          
   for($i = 0; $i < count($json['Coords']); $i++){
   
      print_r($json['Coords'][$i]);
      
      echo '<br>';
      
      foreach ($json['Coords'][$i] as $key => $value) {
          echo 'Key : ' . $key . ' -> ' . 'Value :' . $value . '<br>';
      }
      
      echo '<br>';
   }
  
  /* ================================================================================== */
  
  
