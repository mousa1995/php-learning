<?php
$url = "https://user:pass@example.com:8080/products/laptop?id=25&sort=price#details";

$parse = parse_url($url);

var_dump($parse);
// result
// array(8) {                                                                                                           
//   ["scheme"]=>                                                                                                       
//   string(5) "https"                                                                                                  
//   ["host"]=>                                                                                                         
//   string(11) "example.com"                                                                                           
//   ["port"]=>                                                                                                         
//   int(8080)                                                                                                          
//   ["user"]=>                                                                                                         
//   string(4) "user"                                                                                                   
//   ["pass"]=>                                                                                                         
//   string(4) "pass"                                                                                                   
//   ["path"]=>                                                                                                         
//   string(16) "/products/laptop"                                                                                      
//   ["query"]=>                                                                                                        
//   string(16) "id=25&sort=price"                                                                                      
//   ["fragment"]=>                                                                                                     
//   string(7) "details"                                                                                                
// }                                                                                                                    


// Concise

// scheme => https
// user => user
// pass => pass
// host => example.com
// port =>8080
// path => /products/laptop
// query => id=25&sort=price
// fragment => details