<?php

function get_date($idate){

  $time  = $idate%10000;
  $idate = ($idate - $idate%10000)/10000 ;
  $day   = $idate%100 ;
  $idate = ($idate - $idate%100)/100 ;
  $month = $idate%100 ;
  $idate = ($idate - $idate%100)/100 ;
  $year  = 2000+$idate ;
  $m;
    
    if($time >1159)
      $time_suf = "PM" ;
     else
      $time_suf = "AM" ;

    if($time>1259)
      $time = $time-1200;
    
    if(($time/100)<1)
      $time=$time+1200;

    $min = $time%100;
    $hr = ($time-$time%100)/100 ;

    if($min<10)
      $min = '0'.$min ;

    switch($month)
    {
      case '1' : $m="January" ; break;
      case '2' : $m="February" ; break;
      case '3' : $m="March" ; break;
      case '4' : $m="April" ; break;
      case '5' : $m="May" ; break;
      case '6' : $m="June" ; break;
      case '7' : $m="July" ; break;
      case '8' : $m="August" ; break;
      case '9' : $m="September" ; break;
      case '10': $m="October" ; break;
      case '11': $m="November" ; break;
      case '12': $m="December" ; break;    
    }


    $sdate = $day.' '.$m.' '.$year.' '.$hr.':'.$min.' '.$time_suf ;

    return $sdate ;






};



?>








   <div class="ui bottom attached segment">
                                        <?php

                                        

                                          foreach ($contest_details as $detail) {
                                          echo '<p>'.$detail->contest_desc.'</p>' ;
                                          }
                                                                              
                                        ?>


                                         <div class="ui two column divided grid">
                                            <div class="row">
                                                 <div class="column">
                                                      <div class="ui black label">
                                                          Users <i class="users icon"></i> 237
                                                      </div>
                                                              <br><br>
                                                      <div class="ui black label">
                                                           Total Submissions <i class="cloud upload icon"></i> 1026
                                                      </div>
                                                        <br><br>
                                                      <div class="ui black label">
                                                          Accepted Submissions <i class="checkmark sign icon"></i> 671
                                                      </div>
                                                  </div>
                                                  <div class="column">
                                                        <div class="ui black label">
                                                          Type <i class="browser icon"></i>

                                                          <?php



                                                          foreach ($contest_details as $detail) {
                                                            echo  $detail->contest_type ;
                                                           }

                                                          ?>


                                                      </div>  <br><br>
                                                        <div class="ui black label">
                                                          Start Time <i class="calendar icon"></i>
                                                          <?php
                                                            foreach ($contest_details as $detail) {
                                                            $idate = $detail->start_time ;
                                                            $sdate = get_date($idate);
                                                            echo $sdate ;
                                                           }
                                                          ?>


                                                      </div> <br><br>
                                                      <div class="ui black label">
                                                          End Time <i class="calendar icon"></i> 
                                                          <?php
                                                            foreach ($contest_details as $detail) {
                                                            $idate = $detail->end_time ;
                                                            $sdate = get_date($idate);
                                                            echo $sdate ;
                                                           }
                                                          ?>


                                                      </div>
                                                  </div>
                                            </div>
                                         </div>
                                   </div>