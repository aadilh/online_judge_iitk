<div id="grid">
        <div class="ui horizontally divided grid">
                
            
          <div class="twelve wide column">
           <div class="row">
                    <div class="ui red center aligned inverted segment">
                        <p>
                            <?php

                            foreach ($problem_details as $p) {
                                echo $p->contest_name ;
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
  