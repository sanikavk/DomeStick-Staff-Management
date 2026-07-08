<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>DomeStick</title>
        <link rel="stylesheet" href="cdash_style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    </head>
    <body>
        <div class="containers">
          <nav>
              <ul>
                <li>
                  <h1 class="nav-items">   </h1>
                </li>
                
                  <li>
                    <h1 class="nav-items">Dashboard</h1>
                  </li>
                  <li>
                    <h1 class="nav-items">  </h1>
                  </li>
                  <li>
                    <h1 class="nav-items">  </h1>
                  </li>
                  <li><a href="../main/index.html">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Home</span>
                  </a></li>
                  <li><a href="../order_history/index.php">
                    <i class="fas fa-history"></i>
                    <span class="nav-item">Order History</span>
                  </a></li>
                  <li><a href="../feedback/index.html">
                    <i class="fas fa-solid fa-message"></i>
                    <span class="nav-item">Feedback</span>
                  </a></li>
                  <li><a href="../main/logout.php" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Logout</span>
                  </a></li>
              </ul>
          </nav>
            <div class="container">
                <div class="header">
                    <div class="nav">
                        <div class="search">
                           <input type="text" placeholder="Search...">
                           <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                       <!-- <div class="user-wrappers">
                         <i class="fa-solid fa-circle-user fa-2xl" style="color: #8a8aee;"></i>
                        </div><br> -->
                        <div class="user-wrappers">
                          <p>Welcome, <br><?php echo $_SESSION['username']; ?></p>
                      </div>
                    </div>
                </div>
                <div class="content">
                  <div class="content-2">
                    <div class="recent-payments">
                      <div class="title">
                          <h2>Choose Your Services</h2>
                         <!-- <a href="#" class="btn">View All</a> -->
                      </div>

                      <table>
                        <!--  <tr>
                              <th>Name</th>
                              <th>School</th>
                              <th>Amount</th>
                              <th>Option</th>
                          </tr> -->
                          <tr>
                              <td><img src="../images/cleaners.jpg" alt=""></td>
                              <td>Cleaning Services</td>
                              <td></td> 
                              <td><a href="../clean_book/index.html" class="btn">Book</a></td>
                          </tr>
                          <tr>
                              <td><img src="../images/plumber.webp" alt=""></td>
                              <td>Plumbing Services</td>
                              <td></td>
                              <td><a href="../plumbing_book/index.html" class="btn">Book</a></td>
                          </tr>
                          <tr>
                              <td><img src="../images/bbsitting.jpg" alt=""></td>
                              <td>BabySitting Services</td>
                              <td></td>
                              <td><a href="../bbsitting_book/index.html" class="btn">Book</a></td>
                          </tr>
                          <tr>
                              <td><img src="../images/electric.webp" alt=""></td>
                              <td>Electrical Services</td>
                              <td></td>
                              <td><a href="../electric_book/index.html" class="btn">Book</a></td>
                          </tr>
                      </table>
                  </div>
                  </div>
                </div>
            </div>
        </div>  
    </body> 
</html> 
