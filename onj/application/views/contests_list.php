<div id="grid">
             <div class="ui horizontally divided grid">
                      <div class="two column row">
                        <div class="one wide column">
                            <div class="ui raised left aligned segment custom-width">
                            <div class="ui red top attached label">Contests</div>
                                <div class="ui divided list">
                                      
                                      


                                      <?php


                                          foreach ($contests_short_list as $short_list) {
                                            $name = $short_list->contest_name ;
                                            $contest_id = $short_list->contest_id ;

                                            echo '<div class="item">' ;
                                            echo ' <i class="checkered large flag icon"></i>' ;
                                            echo ' <div class="content">';
                                            echo '<a class="header" onclick="open_contest(\''.$contest_id.'\');" >'.$name.'</a><br>' ;
                                            echo '</div></div>' ;


                                          }                  
                                        
                                      ?>




                                </div>
                            </div>
                        </div>