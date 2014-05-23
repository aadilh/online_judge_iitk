<div id="grid">
             <div class="ui horizontally divided grid">
                      <div class="two column row">
                        <div class="one wide column">
                            <div class="ui raised left aligned segment custom-width">
                            <div class="ui red top attached label">Contests</div>
                                <div class="ui divided list">
            
                                  <div class="item">
                                     <i class="edit large <?php if ($practice_type_selected == '' || $practice_type_selected == 'easy') echo "active red"; ?> icon"></i>
                                     <div class="content">
                                    <h7 class="ui small header <?php if ($practice_type_selected == '' || $practice_type_selected == 'easy') echo "red"; ?>" onclick=<?php echo "\"open_practice_type('easy', '".base_url()."');\""?> ><a>Easy</a></h7><br>
                                    </div>
                                  </div>

                                  <div class="item">
                                     <i class="edit large <?php if ($practice_type_selected == 'med') echo "active red"; ?> icon"></i>
                                     <div class="content">
                                    <h7 class="ui small header <?php if ($practice_type_selected == 'med') echo "red"; ?>" onclick=<?php echo "\"open_practice_type('med', '".base_url()."');\""?> ><a>Medium</a></h7><br>                                       
                                    </div>
                                  </div>

                                  <div class="item">
                                     <i class="edit large icon"></i>
                                     <div class="content">
                                    <a class="header" onclick=<?php echo "\"open_practice_type('hard', '".base_url()."');\""?> >Hard</a><br>                                       
                                    </div>
                                  </div>


                                  </div>
                            </div>
                        </div>