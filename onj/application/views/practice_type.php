                <div class="two wide column">
                    <div class="ui stacked segment">
                        <div class="ui red top attached label">
                                    
                            <?php echo $practice_type_selected; ?>


                        </div>
                              
                        <!-- Pagination Menu
                        Script to manage how pagination menu looks at different pages
                        -->
                        <div class="ui left aligned segment">

                            <div class="ui selection dropdown">
                          <input name="gender" type="hidden">
                          <div class="default text">Sort By</div>
                          <i class="dropdown icon"></i>
                          <div class="menu">
                            <div class="item" data-value="sort_accepted_submissions">Accepted Submissions</div>
                            <div class="item" data-value="sort_total_submissions">Total Submissions</div>
                            <div class="item" data-value="sort_id">Date added</div>

                          </div>
                        </div>

                            
                            <div class="ui small pagination menu">
                                <?php

                                echo "<a class=\"icon ";
                                if ($page_num == '1') echo "disabled ";
                                echo "item\" ";
                                if ($page_num != 1)
                                {
                                    echo "onclick=\"open_practice_page_number(";
                                    echo "'".$practice_type_selected."','".($page_num-1)."','".base_url()."','".$this->uri->segment(3)."'";
                                    echo ");\">";
                                }

                                ?>

                                <i class="left arrow icon"></i>
                                </a>


                                <?php 

                                function item($page_num,$i)
                                { 
                                    if ($page_num==$i)
                                        echo "<a class = \"active item\"> ".$i." </a>";
                                    else
                                        echo "<a class = \"item\"> ".$i." </a>";
                                }
                                function dots(){echo "<div class=\"disabled item\">...</div>";}

                                $num_problems=0;
                                foreach ($problems as $problem)
                                    $num_problems++;

                                $num_pages = intval($num_problems/10)+1;

                                $i=1;
                                if ($num_pages > 10  )
                                {
                                    //if ($page_num > 5 && $page_num <= $num_pages-5)
                                    $i=1;
                                    while ($i<4)
                                        item($page_num,$i++);
                                        
                                    if ($page_num > 5)
                                        dots();
                                    
                                    if ($page_num > 4 && $page_num < $num_pages-1)
                                        echo "<a class = \"item\"> ".($page_num-1)." </a>";
                                    if ($page_num > 3 && $page_num < $num_pages-2)
                                        echo "<a class = \"active item\"> ".$page_num." </a>";
                                    if ($page_num > 2 && $page_num < $num_pages-3)
                                        echo "<a class = \"item\"> ".($page_num+1)." </a>";

                                    if ($page_num < $num_pages-4)
                                        dots();
                                    $i=$num_pages-2;
                                    while ($i<=$num_pages)
                                        item($page_num,$i++);
                                }
                                else if ($page_num < 11)
                                {
                                    $i=1;
                                    while ($i<=$num_pages)
                                        item($page_num,$i++);
                                }
                            
                                echo "<a class= \"icon "; 
                                if ($page_num == $num_pages) echo "disabled ";
                                echo "item\"";
                                if ($page_num!=$num_pages)
                                {
                                    echo "onclick=\"open_practice_page_number(";
                                    echo "'".$practice_type_selected."','".($page_num+1)."','".base_url()."','".$this->uri->segment(3)."');\">";
                                }
                                ?>
                              
                            
                                <i class="right arrow icon"></i>
                                </a>
                                </div>
                                
                                </div>
                                
                               
