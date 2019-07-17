 <!--Starting of navbar-->
 <nav class="navbar navbar-dark bgr1 navbar-expand-md">
       <a href="#" class="navbar-brand brand-name">
        <img src="logo.png" alt="" class="img-fluid">
        AIMT
      </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse space" id="nav">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item pr-3 ">
                <a href="index.html" class="nav-link active"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a>
              </li>

              <li class="nav-item pr-4 ">
                <a href="courses.html" class="nav-link active"><i class="fas fa-graduation-cap"></i> Courses</a>
              </li>
              <li class="nav-item">
                <a href="fee-structure.html" class="nav-link active"><i class="fas fa-coins"></i> Fee Structure</a>
              </li>

              <li class="nav-item pr-4 ">
                <a href="#loginModal" class="nav-link active" data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Login

                  <div class="modal fade" role="dialog" id="loginModal">
                      <div class="modal-dialog">
                          <div class="modal-content">
                             <form class="px-3 py-4" action="login.php" method="post">
                             <div type="button" class="close" data-dismiss="modal">&times;</div>
                <a href="#loginModal" class="text-danger" >Login Here</a>
                <div class="form-group mb-4">

                  <input type="text" class="form-control mt-4" name="email" placeholder="Enter email">
                </div>
                <div class="form-group mb-4">

                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="form-check mb-4">
                  <input type="checkbox" class="form-check-input">
                  <label class="form-check-label h6"for="dropdownCheck">
                    I agreed
                  </label>
                </div>
                <button type="submit" class="btn btn-danger">Login</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item h6" href="signIn.html">Login if ? Already registered</a>
              <a class="dropdown-item mb-3 h6" href="#loginModal1">Not registered yet?</a>
                          </div>
                      </div>
                  </div>

                </a>
              </li>


              <li class="nav-item pr-4 ">
                <a href="#loginModal1" class="nav-link active" data-toggle="modal" data-target="#loginModal1"><i class="fab fa-buffer"></i> Regsiter

                  <div class="modal fade" role="dialog" id="loginModal1">
                      <div class="modal-dialog">
                          <div class="modal-content">
                             <form class="px-3 py-4" action="login.php" method="post">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="#loginModal1" class="text-danger" >Register Here</a>
                <div class="form-group mb-4">

                  <input type="text" class="form-control mt-4" name="email" placeholder="Enter email">
                </div>
                <div class="form-group mb-4">

                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="form-check mb-4">
                  <input type="checkbox" class="form-check-input">
                  <label class="form-check-label h6"for="dropdownCheck">
                    I agreed
                  </label>
                </div>
                <button type="submit" class="btn btn-danger">Register</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item h6" href="signIn.html">Login if ? Already registered</a>
              <a class="dropdown-item mb-3 h6" href="#loginModal1">Not registered yet?</a>
                          </div>
                      </div>
                  </div>

                </a>
              </li>

              <li class="nav-item pr-4 ">
                <a href="#loginModal2" class="nav-link active" data-toggle="modal" data-target="#loginModal2"><i class="fab fa-quora"></i>uery

                  <div class="modal fade" role="dialog" id="loginModal2">
                      <div class="modal-dialog">
                          <div class="modal-content">
                             <form class="px-3 py-3" action="login.php" method="post">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="#loginModal2"class="text-danger" >Drop <i class="fab fa-quora"></i>uery Here</a>
                <div class="form-group mb-4">

                  <input type="text" class="form-control mt-4" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group mb-4">

                  <input type="text-area" class="form-control" name="query" placeholder="write your quey here......">
                </div>

                <button type="submit" class="btn btn-danger">Send</button>
              </form>
                      </div>
                  </div>

                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fas fa-phone-volume"></i> +91 8726514762</a>
              </li>


            </ul>



      </div>
    </nav>

    <!--Ending of navbar-->
