<!--



-->




   <div class="ui raised segment">
                                  <div class="ui black top attached label">Problems</div>
                                  
                                  <?php

                                  foreach ($problems_list as $pl) {
                                    
                                    switch($pl->difficulty)
                                    {
                                      case '1':$diffi = "Easy";     $color="blue";   break;
                                      case '2':$diffi = "Moderate"; $color="green";  break;
                                      case '3':$diffi = "Advanced"; $color="red" ;   break;
                                      

                                    }


                                    echo '<div class="ui items">' ;
                                    echo '<div class="item" onclick="open_problem(\''.$pl->problem_id.'\');">' ;
                                    echo '<div class="content">' ;
                                    echo '<div class="meta"><div class="ui green label"><i class="checkmark icon"></i> Accepted</div></div>' ;
                                    echo ' <div class="name">'.$pl->problem_name.'</div>' ;
                                    echo '<p class="description">'.$pl->short_desc.'</p>' ;
                                    echo '  </div>' ;
                                    echo '<div class="extra">' ;
                                    echo '<div class="ui '.$color.' label">Difficulty <i class="smile icon"></i>'.$diffi.'</div>' ;
                                    echo ' <div class="ui blue label">Accepted Submissions <i class="checkmark sign icon"></i>'.$pl->accepted_submissions.'</div>' ;
                                    echo '</div></div><br><br>' ;
                                  

                                  }


                                  ?>


<!-- Sample problems
                                  
                                  <div class="ui items">
                                      <div class="item">
                                        <div class="content">
                                          <div class="meta"><div class="ui green label"><i class="checkmark icon"></i> Accepted</div></div>
                                          <div class="name">Compilers and parsers</div>
                                          <p class="description">
                                          Given some expressions which represent some instructions to be analyzed by Lira's compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there's no such a prefix.
                                          </p>
                                        </div>
                                        <div class="extra">
                                              <div class="ui blue label">
                                               Difficulty <i class="smile icon"></i> Easy
                                               </div>
                                                <div class="ui blue label">
                                                          Accepted Submissions <i class="checkmark sign icon"></i> 669
                                                </div>
                                        </div>
                                        
                                        
                                        
                                        
                                      </div>
                                      
                                      <br><br><div class="items"></div>
                                      
                                      <div class=" green item">
                                        <div class="content">
                                          <div class="meta"><div class="ui red label"><i class="remove icon"></i> Rejected</div></div>
                                          <div class="name">Compilers and parsers</div>
                                          <p class="description">
                                          Given some expressions which represent some instructions to be analyzed by Lira's compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there's no such a prefix.
                                          </p>
                                        </div>
                                        <div class="extra">
                                              <div class="ui green label">
                                               Difficulty <i class="meh icon"></i> Moderate
                                               </div>
                                                <div class="ui blue label">
                                                          Accepted Submissions <i class="checkmark sign icon"></i> 71
                                                </div>
                                        </div>
                                  </div>
                                  
                                   <div class=" green item" onclick="alert('fuck yeah');">
                                        <div class="content">
                                          <div class="meta"><div class="ui  label"><i class="ellipsis horizontal icon"></i> Unattempted</div></div>
                                          <div class="name">Compilers and parsers</div>
                                          <p class="description">
                                          Given some expressions which represent some instructions to be analyzed by Lira's compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or 0 if there's no such a prefix.
                                          </p>
                                        </div>
                                        <div class="extra">
                                              <div class="ui red label">
                                               Difficulty <i class="frown icon"></i> Advanced
                                               </div>
                                                <div class="ui blue label">
                                                          Accepted Submissions <i class="checkmark sign icon"></i> 7
                                                </div>
                                        </div>
                                  </div>
                                  
    -->                             
                                  
                                  </div>
                            
                            </div>
                     
                            
                     
                     
                         </div>
                      </div>
                     
                      </div>
             </div>
        </div>



</body>
</head>