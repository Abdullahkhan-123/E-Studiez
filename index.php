<!-- Start nav -->    
<?php 
include('Partial/header.php')

?>
<!-- END nav -->


<?php 

    if(isset($_SESSION['username']))
    {
        ?>
        <div class="hero-wrap js-fullheight text-center" style="background-image: url('images/bg_1.jpg'); ">
        <div class="overlay"></div>           
        <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate">
          <span class="subheading">Welcome to true Dreams digital Academy</span>
            <h1 class="mb-4">We Are Online Platform For Make Learn</h1>
              <p class="caps">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              <p class="mb-0"><a href="course.php" class="btn btn-primary">Our Course</a> <a href="about.php" class="btn btn-white">Learn More</a></p>
        </div>
        </div>
        </div>
        </div>

        <?php
    }    
    else
    {
        ?>

            
        <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate">
            <span class="subheading">Welcome to true Dreams digital Academy</span>
            <h1 class="mb-4">We Are Online Platform For Make Learn</h1>
            <p class="caps">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            <p class="mb-0"><a href="course.php" class="btn btn-primary">Our Course</a> <a href="about.php" class="btn btn-white">Learn More</a></p>
        </div>
        </div>
        </div>
        </div>
        
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5 order-md-last">
                <div class="login-wrap p-4 p-md-5">
                    <h3 class="mb-4 text-center">Here You Can Login & Register</h3>
                  <form action="register.php" class="signup-form" method="POST">
                  <div class="form-group">
                 <label class="label" for="password">If You Don't Account</label>
                 <input type="button" class="form-control btn btn-outline-primary" name="LoginNow" value="Register Now" onclick="location.href='register.php'" >
                </div>                   
                <div class="form-group">
                 <label class="label" for="password">If You Already Join Us Login </label>
                 <input type="button" class="form-control btn btn-outline-primary" name="LoginNow" value="Login Now" onclick="location.href='login.php'" >
                </div>            
                  </form>         
                </div>
                </div>
           </div>
        </div>
    </section>
    
        <?php
    }

?>

<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Start Learning Today</span>
            <h2 class="mb-4">Browse Online Course Category</h2>
        </div>
    </div>
    <div class="row justify-content-center">
     <div class="col-md-3 col-lg-2">
        <a href="course.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-1.jpg);">
           <div class="text w-100 text-center">
              <h3>IT &amp; Software</h3>
              <span>100 course</span>
          </div>
      </a>
  </div>
  <div class="col-md-3 col-lg-2">
    <a href="course.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-9.jpg);">
       <div class="text w-100 text-center">
          <h3>Music</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="course.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-3.jpg);">
       <div class="text w-100 text-center">
          <h3>Photography</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="course.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-5.jpg);">
       <div class="text w-100 text-center">
          <h3>Marketing</h3>
          <span>100 course</span>
      </div>y
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="course.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-8.jpg);">
       <div class="text w-100 text-center">
          <h3>Health</h3>
          <span>100 course</span>
      </div>
  </a>
</div>
<div class="col-md-3 col-lg-2">
    <a href="course.php" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(images/work-6.jpg);">
       <span class="text w-100 text-center">
          <h3>Audio Video</h3>
          <span>100 course</span>
      </span>
  </a>
</div>
<div class="col-md-12 text-center mt-5">
    <a href="course.php" class="btn btn-primary">See All Courses</a>
</div>
</div>
</div>
</section>

<!-- Buy now -->

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Pick Your Course Today</span>
            <h2 class="mb-4">Our Feture Course</h2>
        </div>
    </div>

    <div class="row">

    <?php 
    
    
    
      //GET QUERY THE ADMIN
    //   $sql = "SELECT * FROM `catname` WHERE `Active` = 'Feature' order by `ID` DESC";
    $sql = "
          SELECT upcourse.ID, upcourse.Name,upcourse.image_name,upcourse.Descript,upcourse.Price,upcourse.Active,addcategory.CName,teacher.FullName
          FROM upcourse
          INNER JOIN addcategory ON upcourse.Category_Id=addcategory.ID
          INNER JOIN teacher ON upcourse.TeacherID=teacher.ID
          WHERE Active = 'Feature' order by `ID` DESC;	  
          ";


      // EXCUTE THE QUERY
      $res = mysqli_query($conn, $sql);

      // checking the query excute or not
      if($res==TRUE)
      {
        //count rows
        $rows = mysqli_num_rows($res); //get all the row in the database

        $No=1;

        // check num of rows
        if($rows>0)
        {
          // we have data in database
          while($rows = mysqli_fetch_assoc($res))
          {
            // using while loop to get data

            $ID = $rows['ID'];
            $Name = $rows['Name'];
            $image_name = $rows['image_name'];
            $Descript = $rows['Descript'];
            $Price = $rows['Price'];
            $Active = $rows['Active'];
            $Category = $rows['CName'];
			$Teacher = $rows['FullName'];

            // display the values in our tables
            ?>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                
                    <a href="#" class="img">                    
                    <img src="<?php echo $imgurl,$image_name; ?>" height="270px" width="100%">
                <span class="price">Buy Now</span>
                    </a>
                <div class="text p-4">
                    <h3><a href="#"><?php echo $Descript; ?></a></h3>
                    <p class="advisor">Category <span><?php echo $Category; ?></span></p>
                    <p class="advisor">Instructor <span><?php echo $Teacher; ?></span></p>
                <ul class="d-flex justify-content-between">
                   <li><span class="flaticon-shower">PKR :</span><?php echo $Price; ?></li>
                   <li class="price">USD : <?php echo $Price; ?></li>
               </ul>
           </div>
       </div>
   </div>

            <?php
          }
        }
    }
    ?>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container">
    <div class="row">
       <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
         <div class="block-18 d-flex align-items-center">
            <div class="icon"><span class="flaticon-online"></span></div>
            <div class="text">
             <strong class="number" data-number="100">0</strong>
             <span>Online Courses</span>
         </div>
     </div>
 </div>
 <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
     <div class="block-18 d-flex align-items-center">
        <div class="icon"><span class="flaticon-graduated"></span></div>
        <div class="text">
         <strong class="number" data-number="2500">0</strong>
         <span>Students Enrolled</span>
     </div>
 </div>
</div>
<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
 <div class="block-18 d-flex align-items-center">
    <div class="icon"><span class="flaticon-instructor"></span></div>
    <div class="text">
     <strong class="number" data-number="85">0</strong>
     <span>Experts Instructors</span>
 </div>
</div>
</div>

</div>
</section>

<section class="ftco-section ftco-about img">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-12 about-intro">
            <div class="row">
               <div class="col-md-6 d-flex">
                  <div class="d-flex about-wrap">
                     <div class="img d-flex align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
                     </div>
                     <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(images/about.jpg);">
                     </div>
                 </div>
             </div>
             <div class="col-md-6 pl-md-5 py-5">
              <div class="row justify-content-start pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                     <span class="subheading">Enhanced Your Skills</span>
                     <h2 class="mb-4">Learn Anything You Want Today</h2>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Get in touch</button>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</section>

<section class="ftco-intro ftco-section ftco-no-pb">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(images/bg_4.jpg);">
             <div class="overlay"></div>
             <h2>We Are StudyLab An Online Learning Center</h2>
             <p>We can manage your dream building A small river named Duden flows by their place</p><br>
             <p class="mb-0"><a href="course.php" class="custom-btn2 px-4 py-3">Enroll Now</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<section class="ftco-section services-section">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
         <div class="w-100 mb-4 mb-md-0">
            <span class="subheading">Welcome to StudyLab</span>
            <h2 class="mb-4">We Are StudyLab An Online Learning Center</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <div class="d-flex video-image align-items-center mt-md-4">
              <a href="#" class="video img d-flex align-items-center justify-content-center" style="background-image: url(images/about.jpg);">
                 <span class="fa fa-play-circle"></span>
             </a>
             <h4 class="ml-4">Learn anything from StudyLab, Watch video</h4>
         </div>
     </div>
 </div>
 <div class="col-md-6">
     <div class="row">
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
          <div class="services">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3">Top Quality Content</h3>
              <p>A small river named Duden flows by their place and supplies</p>
          </div>
      </div>      
  </div>
  <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
      <div class="services">
        <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
        <div class="media-body">
          <h3 class="heading mb-3">Highly Skilled Instructor</h3>
          <p>A small river named Duden flows by their place and supplies</p>
      </div>
  </div>    
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">World Class &amp; Quiz</h3>
      <p>A small river named Duden flows by their place and supplies</p>
  </div>
</div>      
</div>
<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
  <div class="services">
    <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
    <div class="media-body">
      <h3 class="heading mb-3">Get Certified</h3>
      <p>A small river named Duden flows by their place and supplies</p>
  </div>
</div>      
</div>
</div>
</div>
</div>
</div>
</section>


<section class="ftco-section bg-light">
            <div class="col-md-12 mt-5">
				<div id="map" class="bg-white"></div>
			</div>
</section>



<!-- for contact us button -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px;">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="font-size:30px;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label text-dark" for="name">Full Name</label>
                        <input type="text" class="form-control" name="Name" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="form-control" name="Email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="#">Message</label>
                        <textarea name="Message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                        <div class="submitting"></div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    
    </div>
  </div>
</div>   

<?php include('Partial/footer.php') ?>

<?php

	if(isset($_POST['submit']))
	{
		
		$to_email = "abdullahkhanstft@gmail.com";
		$subject = $_POST['Subject'];
		$body = $_POST['Message'];		
		$headers = "From: " . $_POST["Email"] . "<". $_POST["Email"] .">\r\n";
		
		


		if (mail($to_email, $subject, $body, $headers)) {
    	// echo "Email successfully sent to $to_email...";
		echo "<script>
                alert('Message successfully sent $to_email')
                window.location.href='index.php';
                </script>";
		} else {
			echo "<script>
			alert('Message Not Send Please try it one more time')
			window.location.href='contact.php';
			</script>";
		}

	}
?>

