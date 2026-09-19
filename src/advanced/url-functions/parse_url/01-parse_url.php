<?php
$url = "https://example.com:8080/products/laptop?id=25&sort=price#details";

// https://example.com:8080/products/laptop?id=25&sort=price#details
//   ↓          ↓       ↓            ↓             ↓
// scheme      host    port         path          query
//                                                    ↓
//                                                fragment
//query - after the question mark ?

//fragment - after the hashmark #

$url = "https://example.com/products?id=25";

$result = parse_url($url);

// The result
// print_r($result);
// Array                                                                                                                
// (                                                                                                                    
//     [scheme] => https                                                                                                
//     [host] => example.com                                                                                            
//     [path] => /products                                                                                              
//     [query] => id=25                                                                                                 
// )                                                                                                                    
