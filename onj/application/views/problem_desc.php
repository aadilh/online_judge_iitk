
                  <div class="ui blue ribbon label">Problem Statement</div>
                 <p>

                 <?php


                    foreach ($problem_details as $p) {
                             echo nl2br( htmlspecialchars( $p->problem_statement) );
                    }


                 ?>
                  

                 </p>

                  <div class="ui green ribbon label">Input</div>

                  <p>
                    <?php
                    foreach ($problem_details as $p) {
                             echo nl2br( htmlspecialchars( $p->input_desc) );
                    }
                    ?>
                  </p>

                  <div class="ui orange ribbon label">Output</div>
                   <p>
                    <?php
                    foreach ($problem_details as $p) {
                             echo nl2br(htmlspecialchars( $p->output_desc) );
                    }
                    ?>
                  </p>

                  <div class="ui red ribbon label">Contraints</div>

                   <p>
                    <?php
                    foreach ($problem_details as $p) {
                             echo nl2br(htmlspecialchars( $p->constraints ));
                    }
                    ?>
                  </p>

                  <div class="ui teal ribbon label">Sample</div>

                   <p>
                    <?php
                    foreach ($problem_details as $p) {
                             echo '<h3>Input : </h3><br>';
                             echo nl2br(htmlspecialchars( $p->sample_input) );
                             echo '<br><h3>Output : </h3>';                             
                             echo nl2br( htmlspecialchars( $p->sample_input ) ).'<br>';

                    }
                    ?>
                  </p>

                  <div class="ui purple ribbon label">Extra Info</div><br>

                  <div class="ui two column divided grid">
                      <div class="row">
                          <div class = "column">

                            
                            <br><br>    
                            <p class="ui blue label"><i class="time icon"></i> Time Limit</p><br><br>
                            <p class="ui red label"><i class="save icon"></i> Memory Limit</p><br><br>
                            <p class="ui green label"><i class="chat outline icon"></i> Problem Discussion</p><br><br>
                            <p class="ui teal label"><i class="user icon"></i> Author</p><br><br>

                          </div>
                          <div class = "column">
                             <br><br>    
                            <p class="ui blue label"><i class="time icon"></i>
                            <?php
                            foreach ($problem_details as $p) {
                              echo $p->time_limit.' seconds' ;
                            }
                            ?>
                            </p><br><br>
                            <p class="ui red label"><i class="save icon"></i>
                              <?php
                            foreach ($problem_details as $p) {
                              echo $p->memory_limit.' MB' ;
                            }
                            ?>
                            </p><br><br>
                            
                            <?php
                            foreach ($problem_details as $p) {
                              echo '<a class="ui green label" ' ;
                              echo 'href="'.base_url().'index.php/forum/problem/'.$p->problem_id.'" >' ;
                            }
                            ?>
                            <i class="chat outline icon"></i>
                            Click Here
                            </a><br><br>
                            <p class="ui teal label"><i class="user icon"></i>
                              <?php
                            foreach ($problem_details as $p) {
                              echo $p->author ;
                            }
                            ?>

                            </p><br><br>


                          </div>


                      </div>
                  </div>



