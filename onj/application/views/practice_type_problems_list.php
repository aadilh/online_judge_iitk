<div class="ui raised segment">
                                  
                                  
                                  <?php
                                  $i=1;
                              	foreach ($problems as $prob)	
	                                {
	                                	if ($i<=(10*($page_num-1)))
	                                	{
	                                		$i++;
	                                		continue;
	                                	}
	                                  	echo '<div class="ui items">' ;
	                                    echo '<div class="item" onclick="open_problem_practice(\''.$practice_type_selected.'\',\''.$prob->problem_id.'\',\''.base_url().'\');">' ;
	                                    echo '<div class="content">' ;
	                                    echo '<div class="meta"><div class="ui green label"><i class="checkmark icon"></i></div></div>' ;
	                                    echo ' <div class="name">'.$prob->problem_name.'</div>' ;
	                                    echo '  </div>' ;
	                                    echo '<div class="extra">' ;
	                                    //echo '<div class="ui '.$color.' label">Difficulty <i class="smile icon"></i>'.$diffi.'</div>' ;
	                                    echo ' <div class="ui black label"><i class="checkmark sign icon"></i>'.$prob->accepted_submissions.'</div>' ;
	                                    echo ' <div class="ui black label"><i class="upload icon"></i>'.$prob->total_submissions.'</div>' ;
	                                    echo '</div></div><br><br>' ;
	                                    if ($i++ == (10*($page_num)))
	                                    	break;
	                                  }


                                  ?>                          
                                  
                                  
                            
                            </div>
                     
                            
                     
                     
                         </div>
                      </div>
                     
                      </div>
             </div>
        </div>



</body>
</head>