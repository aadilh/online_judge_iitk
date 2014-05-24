<div id="grid">
        <div class="ui horizontally divided grid">
                
            
          <div class="twelve wide column">
           <div class="row">
                    <div class="ui red center aligned inverted segment">
                        <p>
                            <?php

                            foreach ($problem_details as $p) {
                                if ($active == "Practice")
                                {
                                    switch ($p->difficulty)
                                    {
                                        case 1: echo "Easy"; break;
                                        case 2: echo "Medium"; break;
                                        case 3: echo "Hard"; break;
                                    }
                                }
                                else if ($active == "Contests")
                                {
                                    echo $p->contest_name;
                                }
                            }
                            ?>

                        </p>
                    </div>
                 </div>
                 <br>
            <div class="row">
                <div class="ui raised segment">
                <div class="ui black top attached label custom-font-light"><strong>
                    <?php

                            foreach ($problem_details as $p) {
                                echo $p->problem_name ;
                            }

                    ?>

                </strong></div>
  