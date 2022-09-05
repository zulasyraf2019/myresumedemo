<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZAResumeApp</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
<input type="radio" id="home" name="page">
<input type="radio" id="page-about" name="page">
<input type="radio" id="page-education" name="page">
<input type="radio" id="page-works" name="page">
<input type="radio" id="page-handout" name="page">
    <div class="wrapper">
        <nav>
            <div class="menulist">
                <div>
                    <label for="home">
                        <img src="/images/logo.png" class="logo"> 
                    </label>                   
                </div>
                <div class="border-menu aboutpage">
                    <label for="page-about">
                        <img src="/images/user.png" class="img-menu">
                        <div>ABOUT</div>
                    </label>
                </div> 
                <div class="border-menu">
                    <label for="page-education">
                        <img src="/images/education.png" class="img-menu">
                        <div>EDUCATION</div>
                    </label>
                </div>
                <div class="border-menu">
                    <label for="page-works">
                        <img src="/images/work.png" class="img-menu">
                        <div>WORKS</div>
                    </label>
                </div>
                <div class="border-menu">
                    <label for="page-handout">
                        <img src="/images/service.png" class="img-menu">
                        <div>HANDOUT</div>
                    </label>
                </div>
                <!-- <div class="border-menu">
                    <img src="/images/sample.png" class="img-menu">
                    <div>SAMPLE</div>
                </div> -->
            </div>
        </nav>
        <section>
            <div class="myfp">
                <div class="myname">Mohd Zulasyraf</div>
                <div class="anim-type">
                    <div class="iam">I'm a</div>
                    <div class="text"></div>
                </div>
                <div class="socmed">
                    <img src="/images/facebook.png" alt="fb" title="Facebook" />
                    <a href="https://wa.me/60133808244?text=PM%20me"><img src="/images/whatsapp.png" alt="fb" title="Whatsapp" /></a>
                    <img src="/images/messenger.png" alt="fb" title="Messenger" />
                </div>
                <div class="link-download">
                    <a href="/file_cv/cv_mzul.pdf" download>
                        <span class="span-download"> Download CV </span>
                        <img src="/images/download.png" alt="download">
                    </a>
                </div>
            </div>
            <div class="myabout">
                <h2><img src="/images/about.png" alt="about">About Me</h2>
                <div class="aboutme-info">I’m interested in the web application development. I always eager to learn new technology to improve my knowledge and skill. I constantly learning the latest programming technology in order not to miss out on the rapidly growing software technology. If if I don't know about something, I'll keep looking to get the answer. I hope to be an important person and may contribute something valuable in this field.</div>
                <div class="address">
                    <div class="rname"><img src="/images/meuser.png" alt="user"> <b>Name:&nbsp;</b> Mohd Zulasyraf Bin Abdull Rahman</div>
                    <div class="remail"><img src="/images/memail.png" alt=""><b>Email:&nbsp;</b> zulasyraf2019@gmail.com</div>
                    <div class="rdob"><img src="/images/dob.png" alt=""><b>Date of Birth:&nbsp;</b> 14th February 1984</div>
                    <div class="rphone"><img src="/images/phone.png" alt=""><b>Phone:&nbsp;</b> 013-3808244</div>
                </div>
                <h2 class="skills"><img src="/images/skills.png" alt="about"> Skills</h2>
                <div class="skills-bar"> 
                    <div class="programming">
                        <div class="language">
                            <div class="langname">HTML</div>
                            <div class="percent">85%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 85%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">PHP</div>
                            <div class="percent">80%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 80%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">CSS</div>
                            <div class="percent">85%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 85%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">Tailwind</div>
                            <div class="percent">80%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 80%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">Javascript</div>
                            <div class="percent">70%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 70%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">MySQL</div>
                            <div class="percent">80%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 80%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">Laravel</div>
                            <div class="percent">75%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 75%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">React JS</div>
                            <div class="percent">75%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 75%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">Next JS</div>
                            <div class="percent">70%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 70%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">Node JS</div>
                            <div class="percent">65%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 65%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="programming">
                        <div class="language">
                            <div class="langname">Flutter</div>
                            <div class="percent">70%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 70%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="software">
                        <div class="language">
                            <div class="langname">Wordpress</div>
                            <div class="percent">75%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 75%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="software">
                        <div class="language">
                            <div class="langname">Adobe Photoshop</div>
                            <div class="percent">75%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 75%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                    <div class="software">
                        <div class="language">
                            <div class="langname">Adobe Illustrator</div>
                            <div class="percent">70%</div>
                        </div>
                        <div class="percent-bar">
                            <div style="height: 15px; width: 70%; background-color: var(--primary-color)"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="myeducation">
                <h2><img src="/images/edu.png" alt="education">Education</h2>
                <div class="education-info">
                    <div class="bullet-bar"></div>
                    <div class="education-list">
                        <div class="list-desc">
                            <div class="bullet"></div>
                            <div class="edu-desc">
                                <div class="honour">master in information technology</div>
                                <div class="year">2010 - 2012</div>
                                <div class="venue">open university malaysia</div>
                                <div class="result">3.53</div>
                            </div>
                        </div>
                    </div>
                    <div class="education-list">
                        <div class="list-desc">
                            <div class="bullet"></div>
                            <div class="edu-desc">
                                <div class="honour">bachelor in computer science</div>
                                <div class="year">2005 - 2009</div>
                                <div class="major">major: information engineering</div>
                                <div class="venue">universiti sains malaysia</div>
                            </div>
                        </div>
                    </div>
                    <div class="education-list">
                        <div class="list-desc">
                            <div class="bullet"></div>
                            <div class="edu-desc">
                                <div class="honour">diploma in information technology</div>
                                <div class="year">2002 - 2004</div>
                                <div class="venue">institut teknologi tun abdul razak</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mywork">
            <h2><img src="/images/work.png" alt="work">Working Experiences</h2>
                <div class="work-info">
                    <div class="work-list">
                        <div class="list-desc">
                            <div class="work-desc">
                                <div class="job">
                                    <div class="job-title">
                                        <img src="/images/tick.png" alt="tick" class="tick">
                                        <div>
                                            <div class="honour">Information Technology Lecturer</div>
                                            <div class="place-year">Island College Of Technology, Penang (2014 - 2016)</div>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                    <u>Job Description and Responsibilities:</u>
                                        <ol>
                                            <li>Performing all lecturer task including preparing notes, examination question, marking and presenting result to the college academic board.</li>
                                            <li>Supervising final year student project</li>                                                                                         
                                            <li>Be a part of college website development team as designer and programmer. Besides, managing and performing maintenance task to make sure everything runs properly</li>                                               
                                            <li>Be a part of college marketing team in order to help college promotion for new student intake.</li>
                                            <li>
                                                Assisting IT lecturer who is also responsible in the college IT infrastructure:
                                                <ul>
                                                    <li>Make sure all PCs in computer labs under maintenance and working properly.</li>
                                                    <li>Helping IT staff to install network cable within college area.</li>
                                                </ul>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="work-list">
                        <div class="list-desc">
                            <div class="work-desc">
                                <div class="job"><br/>
                                    <div class="job-title">
                                        <img src="/images/tick.png" alt="tick" class="tick">
                                        <div>
                                            <div class="honour">web application programmer</div>
                                            <div class="place-year">Universiti Sains Malaysia, Engineering Campus (May - July 2017)</div>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                    <u>Job Description and Responsibilities:</u>
                                    <div>Working as a contract web developer and assisting the development team. Besides, managing and performing maintenance task to make sure everything runs properly</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="work-list">
                        <div class="list-desc">
                            <div class="work-desc">
                                <div class="job"><br/>
                                    <div class="job-title">
                                        <img src="/images/tick.png" alt="tick" class="tick">
                                        <div>
                                            <div class="honour">part time lecturer</div>
                                            <div class="place-year">Island College Of Technology (July - September 2017)</div>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                    <u>Job Description and Responsibilities:</u>
                                    <div>Performing all lecturer task including preparing notes, examination question, marking and presenting result to the college academic board.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="work-list">
                        <div class="list-desc">
                            <div class="work-desc">
                                <div class="job"><br/>
                                    <div class="job-title">
                                        <img src="/images/tick.png" alt="tick" class="tick">
                                        <div>
                                            <div class="honour">Freelancer</div>
                                            <div class="place-year">Self-Employment (September 2017 - Current)</div>
                                        </div>
                                    </div>
                                    <div class="job-desc">
                                    <u>Job Description and Responsibilities:</u>
                                    <div>Working as a freelancer in web development, designing handout, logo and other business materials for customers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="myhandout">
                <h2><img src="/images/sample.png" alt="sample">sample graphic design</h2>
                <div class="myhandout-info">
                    <div class="sample-frame">
                        <div class="frame" data-toggle="modal" data-target="#myModal">
                            <img src="/images/samples/ss1.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal2">
                            <img src="/images/samples/ss2.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal3">
                            <img src="/images/samples/ss6.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal4">
                            <img src="/images/samples/ss4.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal5">
                            <img src="/images/samples/ss5.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal6">
                            <img src="/images/samples/ss3.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal7">
                            <img src="/images/samples/st1.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal8">
                            <img src="/images/samples/st2.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div><div class="frame" data-toggle="modal" data-target="#myModal9">
                            <img src="/images/samples/st3.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal10">
                            <img src="/images/samples/st4.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal11">
                            <img src="/images/samples/st5.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                        <div class="frame" data-toggle="modal" data-target="#myModal12">
                            <img src="/images/samples/st6.jpg" alt="img">  
                            <div class="overlay"></div> 
                            <div class="detail">
                                <h3>SAMPLE DESIGN</h3>
                                <p>Create for customer</p>
                            </div> 
                        </div>
                    </div>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/ss1.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/ss2.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal3">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/ss6.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal4">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/ss4.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal5">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/ss5.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal6">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/ss3.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal7">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/st1.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal8">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/st2.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal9">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/st3.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal10">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/st4.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal11">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/st5.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->

                    <!-- The Modal -->
                    <div class="modal" id="myModal12">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <span class="closebtn"><button type="button" class="close" data-dismiss="modal">&times;</button></span>
                                <div class="modal-body">
                                    <img src="/images/samples/st6.jpg" alt="img" class="realsize">  
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </div>
            </div>
        </section>    
    </div>
</div>
<script src="/script/script.js"></script>
<script>
    var typing=new Typed(".text", {
        strings: ["Web Developer", "Graphic Designer", "Web Designer"],
        typeSpeed: 150,
        backSpeed: 40,
        loop: true,
    });
</script>
</body>
</html>