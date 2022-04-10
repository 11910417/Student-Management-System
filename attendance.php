<html>
    <body>
        <div style="color:white; background-color:#212529;">
      
      <nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">SMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="include.php">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Student
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="student.php">Add New Course</a></li>
              <li><a class="dropdown-item" href="searchStudent.php">Course Information</a></li>
              <li><a class="dropdown-item" href="search php.php">Student Information</a></li>
              <li><a class="dropdown-item" href="courses.php">Courses available</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="feedback.php">Feedback</a>
          </li>
          <pre>             </pre>
        <!--  <li><form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-warning" type="submit">Search</button></form>
  -->  </li>   
  </ul>
          <ul>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username2'])) : ?>
    	<a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Logout" href="include.php?logout='1'"  name="logout">logout</a> 
    <?php endif ?>

  
  </ul>
      </div>
    </div>
  </nav> 
  </div>
    </body>
    </html>
