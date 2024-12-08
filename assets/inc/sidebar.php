<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class=""><a href="pass-dashboard.php"><i class="icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
                  </li>
                    <?php
                      $aid=$_SESSION['pass_id'];//assaign session a varible [PASSENGER ID]
                      $ret="select * from orrs_passenger where pass_id=?";
                      $stmt= $mysqli->prepare($ret) ;
                      $stmt->bind_param('i',$aid);
                      $stmt->execute() ;//ok
                      $res=$stmt->get_result();
                      //$cnt=1;
                      while($row=$res->fetch_object())
                      {
                    ?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span><?php echo $row->pass_uname;?>'s Profile</span></a>
                    <ul class="sub-menu">
                      <li><a href="pass-profile-update.php">Update</a>
                      </li>
                      <li><a href="pass-profile-password.php">Change Password</a>
                      </li>
                      
                    </ul>
                  </li>
                    <?php }?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Trains</span></a>
                  
                    <ul class="sub-menu">
                       <li><a href="pass-all-available-trains.php">All Available Trains</a>
                       <li><a href="pass-search-available-trains.php">Search Train</a>
                    </li>
                      
                    </ul>
                
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-briefcase-edit-outline"></i><span>Book Ticket</span></a>
                    <ul class="sub-menu">
                      <li><a href="pass-book-train.php">Reserve Train Ticket</a>
                      </li>
                      <li><a href="pass-cancel-train.php">Cancel Train Ticket</a>
                      </li>
                      
                    </ul>
                  </li>                 
                  <li><a href="pass-logout.php "><i class="icon mdi mdi-exit-run"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>