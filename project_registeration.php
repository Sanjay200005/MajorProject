<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link rel="stylesheet" href="css/styles.css">
     
     <title>VIC : Register Project</title>
</head>
<body>
    <?php
        $uid=1;
    ?>
    <div class="container">
    <form action="project_registeration.php?$uid" method="POST">
        <table cellpadding="6" cellspacing="6"  width="40%">
            <tr>
                                    <th style="color:blue">Add a VIC Project:</th>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter project title:</b></td>
                                    <td>
                                        <input type="text" id="title" name="title"  size="25" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter userid in VIC:</b></td>
                                    <td>
                                        <input type="text" id="uid" name="uid"  size="25" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter project lead name:</b></td>
                                    <td>
                                        <input type="text" id="name" name="name"  size="25" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Project Description:</b></td>
                                    <td><textarea placeholder="Project Description" rows = "5" cols = "40" minLength="20" maxlength = "200" name = "description" required></textarea></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter your email:</b></td>
                                    <td><input type="email" id="email" name="email" size="25" required></td>
                                </tr>
                                <tr>
                                    <td class="number"><b>Enter your phone number:</b></td>
                                    <td><input type="tel" id="phone" name="phone" pattern="[0-9]{10}" size="25" required></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter your TechStack:</b></td>
                                    <td><textarea placeholder="Enter your TechStack" rows = "5" cols = "40" maxlength = "1000" name = "techstack" size="25" required></textarea></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Mentor Required?</b></td>
                                    <td><input type="radio" id="yes" name="mentor" value="yes" required="required">Yes&nbsp;&nbsp;<input type="radio" id="no" name="mentor" value="no" required="required">No</td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Is this project made for social cause?</b></td>
                                    <td><input type="radio" id="yes" name="social" value="yes" required="required">Yes&nbsp;&nbsp;<input type="radio" id="no" name="social" value="no" required="required">No</td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Investment Needed</b></td>
                                    <td><input type="text" id="investment" name="investment"  maxlength = "9" size="25"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Return On Investment</b></td>
                                    <td><input type="text" id="ROI" name="ROI"  maxlength = "9" size="25"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Enter your Location:</b></td>
                                </tr>
                                <tr>
                                    <tr>
                                        <th>City: </th>
                                        <th>State: </th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="city" name="city" required></td>
                                        <td><input type="text" id="state" name="state" required></td>
                                    </tr>
                                </tr>
                                <tr>
                                    <td class="txt">
                                        <b>Intended Audience:</b>
                                        <br>Every One - Visible to all
                                        <br>Investors - Visible to investors
                                    </td>
                                    <td>
                                        <select name="audience" id="audience" >
                                            <option selected disabled>Choose here</option>
                                            <option value="EveryOne">Every One</option>
                                            <option value="Investors">Investors</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Select a file:</b><br>(Upload only PDFs)</td>
                                    <td><input type="file" id="myfile" name="myfile"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Add URL:&nbsp;</b></td>
                                    <td><input type="url" id="url" name="url"></td>
                                </tr>
                                <tr>
                                    <td class="txt"><b>Stage:</b></td>
                                    <td>
                                        <select id="stage" name="stage" onchange="change()">
                                            <option selected disabled>Choose here</option>
                                            <option value="Developed">Developed</option>
                                            <option value="Developing">Developing</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr id="dur">
                                    <td class="txt"><b>Duration:</b><br>(in weeks to finish development)</td>
                                    <td><input type="text" id="duration" name="duration"><br><br></td>
                                </tr>
                                <tr>
                                    <td><input type="reset"></td>
                                    <td><input type="submit" value="Submit"></td>
                                </tr>
        </table>
    </form></div>
    <footer class="">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./Main_home.html">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="./mentors_page.html">Our Mentors</a></li>
                        <li><a href="./investors_page.html">Our Investors</a></li>
                        <li><a href="#">Our Projects</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              3-5-1026,Hari Vihar Colony<br>
		              Narayanguda, Hyderabad<br>
		              Telangana - 500029<br>
		              <i class="fa fa-phone fa-lg"></i>: 040 2326 1407<br>
		              <i class="fa fa-fax fa-lg"></i>: 040 2326 1407<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:vic.info@gmail.com">vic.info@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id=" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon " href="mailto:" target="_blank"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021. All rights reserved.</p>
                </div>
           </div>
        </div>
    </footer>
    <script>
        function change()
        {
            var status = document.getElementById("Stage")
            if(status.value=="Developed")
            {
                document.getElementById("dur").style.visibility="hidden";
            }
            else if(status.value=="Developing")
            {
                document.getElementById("dur").style.visibility="visible";
            }
        }
    </script>
</body>
</html>