<body>

                <div class="ui inverted center aligned segment raised large custom-font">
                      
                    ONLINE JUDGE IIT KANPUR
                </div>
          
          <div class="nav" >
            <div class="ui vertical labeled icon menu">
                    <a class="blue item <?php if ($active=="Home")echo "active";?>" href="<?php echo base_url();?>index.php/home">
                        <i class="home icon"></i>
                        Home
                    </a>
                    <a class="red item <?php if ($active=="Contests")echo "active";?>" href="<?php echo base_url();?>index.php/contests">
                        <i class="checkered flag icon"></i>
                       Contests
                    </a>
                    <a class="green item <?php if ($active=="Practice")echo "active";?>" href="<?php echo base_url();?>index.php/practice">
                        <i class="edit icon"></i>
                        Practice
                    </a>
                   
                     <a class="teal item <?php if ($active=="Leaderboard")echo "active";?>" href="<?php echo base_url();?>index.php/leaderboard">
                        <i class="dashboard icon"></i>
                        Leaderboard
                    </a>
                    <a class="purple item <?php if ($active=="Forum")echo "active";?>" href="<?php echo base_url();?>index.php/forum">
                        <i class="comment icon"></i>
                        Forum
                    </a>
                    <a class="orange item <?php if ($active=="About")echo "active";?>" href="<?php echo base_url();?>index.php/about">
                       <i class="info icon"></i>
                       About
                    </a>
            </div>
        </div>
        
        
        
