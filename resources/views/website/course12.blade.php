@extends('website.app', ['title' => 'Cyber Security Mastery'])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Cyber Security Mastery : Protect yourself and your Organization</h1>
                {{--                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p> --}}
                <!--<div class="breadcumb-menu-wrap">-->
                <!--    <ul class="breadcumb-menu">-->
                <!--        <li><a href="{{ url('/') }}">Home</a></li>-->
                <!--        <li>Dashboard Reporting & Analysis with Power BI</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div> <!--==============================
          Course Area
      ==============================-->
    <section class="course-details pt-3 pb-5">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                                <tr class=" mb-4">

                                    <td> <img src="https://youexceltraining.com/img/Yourexcel-img/csm.jpeg" /> </td>
                                </tr>

                                <tr>
                                    <td><i class="far fa-hourglass"></i> Duration: &nbsp; 24 hours</td>
                                </tr>
                                <tr style="padding-top: 8px;">
                                    <td>
                                        <i class="far fa-suitcase"></i>Difficulty Level: &nbsp; Basic to Intermediate
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-suitcase"></i>This Training also includes:</td>
                                </tr>
                                <tr>
                                    <td>

                                        <li> <i class="fas fa-check"></i> Physical On-Campus and Online Training</li>
                                        <li> <i class="fas fa-check"></i> Hands-On Case Study based learning</li>
                                        <li> <i class="fas fa-check"></i> Expert Guidance</li>
                                        <li> <i class="fas fa-check"></i> Lifetime WhatsApp support</li>
                                        <li> <i class="fas fa-check"></i> Networking community access</li>
                                        <li> <i class="fas fa-check"></i> Government Endorsed Certificate</li>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        @if ($pdf == '')
                        @else
                            <a href="{{ $pdf }}" class="vs-btn"><i class="fas fa-hand-point-down"></i> Download
                                Brochure Now</a><br /><br />
                        @endif
                        <a href="https://youexceltraining.com/enquiry-form/cyber-security" class="vs-btn">Enquire
                            Now</a><br /><br />
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Cyber Security Mastery </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    <div class="mb-3">
                        <img src="https://youexceltraining.com/img/Yourexcel-img/csmb.jpeg" />
                    </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p class="wow fadeInDown pb-3">
                        In an increasingly digital world, the importance of Cyber Security cannot be overstated. "Cyber
                        Security Mastery" training program is designed to provide participants with a solid understanding of
                        the core concepts, principles, and best practices in cybersecurity. It also serves as a foundational
                        knowledge base for individuals looking to embark on a career in cybersecurity or anyone interested
                        in enhancing their cybersecurity awareness.
                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item  wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Information Security Fundamentals, Laws and Regulations
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Security, Functionality, and Usability Triangle</li>
                                            <li class="syllabustext">Classification of Attacks</li>
                                            <li class="syllabustext">Information Security Attack Vectors</li>
                                            <li class="syllabustext">Elements of Information Security</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Installation of VMs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Ethical Hacking Fundamentals
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Information Security Laws and Regulations</li>
                                            <li class="syllabustext">Hacking Concepts and Hacker Classes</li>
                                            <li class="syllabustext">Different Phases of Hacking Cycle</li>
                                            <ol class="syllabus-content" type="1">
                                                <li style="list-style: decimal !important;">Reconnaissance</li>
                                                <li style="list-style: decimal !important;">Scanning</li>
                                                <li style="list-style: decimal !important;">Gaining access</li>
                                                <li style="list-style: decimal !important;">Maintaining access</li>
                                                <li style="list-style: decimal !important;">Clearing tracks</li>
                                            </ol>
                                            <li class="syllabustext">Scope and Tools of Ethical Hacking with an </li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Installation of Linux over VMs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Information Security Threats and vulnerability Assessment
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{-- <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Common Techniques Attackers use to Distribute Malware
                                                on the Web</li>
                                            <li class="syllabustext">Different Types of Malware and Malware Countermeasures
                                            </li>
                                            <li class="syllabustext">Vulnerability and Vulnerability Classification</li>
                                            <li class="syllabustext">Vulnerability Assessment and Types of Vulnerability
                                                Assessment</li>
                                            <li class="syllabustext">Vulnerability Assessment Tools and Vulnerability
                                                Exploitation</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Practically exploring Linux, having Sudo Overview and Navigating The File
                                                System</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>
                                    Social Engineering and Countermeasure
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Social Engineering foundation</li>
                                            <li class="syllabustext">Various Social Engineering Techniques</li>
                                            <li class="syllabustext">Insider Threats</li>
                                            <li class="syllabustext">Identity Theft</li>
                                            <li class="syllabustext">Different Social Engineering Countermeasures</li>
                                            <li class="syllabustext">Different Insider Threats and Identity Theft
                                                Countermeasures</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>User Previliges, Common Network Commands, View Creating and Editing Files</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour1" aria-expanded="false"
                                    aria-controls="collapseFour1">
                                    <span class="button-label">Module 5</span>
                                    Network Level Attack and Countermeasure
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Basics Of Networking</li>
                                            <li class="syllabustext">Packet Sniffing and Types of Sniffing</li>
                                            <li class="syllabustext">Various Sniffing Techniques and Tools</li>
                                            <li class="syllabustext">Different Sniffing Countermeasures</li>
                                            <li class="syllabustext">Different Types of DoS and DDoS Attacks</li>
                                            <li class="syllabustext">Different DoS/DDoS Attack Tools</li>
                                            <li class="syllabustext">Different DoS/DDoS Attack Countermeasures and
                                                Protection Tools</li>
                                            <li class="syllabustext">Hijacking and Types of Session Hijacking</li>
                                            <li class="syllabustext">Different Session Hijacking Tools and Countermeasures
                                            </li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>User Privileges, Common Network Commands, View Creating and Editing Files</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour2" aria-expanded="false"
                                    aria-controls="collapseFour2">
                                    <span class="button-label">Module 6</span>
                                    Web Application Attacks and Countermeasures
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Web Server Attacks</li>
                                            <li class="syllabustext">Web Server Attacks and Attack Countermeasures</li>
                                            <li class="syllabustext">Web Application Attacks</li>
                                            <li class="syllabustext">Web Application Attacks and Countermeasures</li>
                                            <li class="syllabustext">SQL Injection Attacks</li>
                                            <li class="syllabustext">SQL Injection Attacks and Countermeasures</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Scripting with Bash</p>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour5" aria-expanded="false"
                                    aria-controls="collapseFour5">
                                    <span class="button-label">Module 7</span>
                                    Wireless Attacks and Countermeasures
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Wireless</li>
                                            <li class="syllabustext">Wireless Network-Specific Attack Techniques</li>
                                            <li class="syllabustext">Bluetooth Attacks</li>
                                            <li class="syllabustext">Wireless Attack Countermeasures</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Python Installation</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- model start --}}
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour8" aria-expanded="false"
                                    aria-controls="collapseFour8">
                                    <span class="button-label">Module 8</span>
                                    Mobile Attacks and Countermeasures
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour8" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Mobile Attacks and Countermeasures</li>
                                            <li class="syllabustext">Mobile Platform Attack Vectors and Vulnerabilities
                                            </li>
                                            <li class="syllabustext">Mobile Device Management (MDM) Concept</li>
                                            <li class="syllabustext">Mobile Attack Countermeasures</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Python Strings and Arithmetic Operations</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- model end --}}
                        {{-- model start --}}
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour9" aria-expanded="false"
                                    aria-controls="collapseFour9">
                                    <span class="button-label">Module 9</span>
                                    IoT and OT Attacks and Countermeasures
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour9" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <h6 class="syllabustitle">IoT Attacks</h6>
                                            <li class="syllabustext">IoT Concepts</li>
                                            <li class="syllabustext">IoT Threats and Attacks</li>
                                            <li class="syllabustext">IoT Attack Countermeasures</li>
                                            <h6 class="syllabustitle">OT Attacks</h6>
                                            <li class="syllabustext">OT Concepts</li>
                                            <li class="syllabustext">OT Threats and Attacks</li>
                                            <li class="syllabustext">OT Attack Countermeasures</li>
                                            <strong>Practical Lab Activities:</strong>
                                            <p>Python Level 1-Variables and Basic Methods and User Input</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- model end --}}
                        {{-- model start --}}
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour10" aria-expanded="false"
                                    aria-controls="collapseFour10">
                                    <span class="button-label">Module 10</span>
                                    Cloud Computing Threats and Countermeasures
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour10" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Cloud Computing Concepts</li>
                                            <li class="syllabustext">Container Technology</li>
                                            <li class="syllabustext">Cloud Computing Threats</li>
                                            <li class="syllabustext">Cloud Attack Countermeasures</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- model end --}}
                        {{-- model start --}}
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour11" aria-expanded="false"
                                    aria-controls="collapseFour11">
                                    <span class="button-label">Module 11</span>
                                    Penetration Testing Fundamentals
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour11" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Fundamentals of Penetration Testing and its Benefits
                                            </li>
                                            <li class="syllabustext">Strategies and Phases of Penetration Testing</li>
                                            <li class="syllabustext">Guidelines and Recommendations for Penetration Testing
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- model end --}}
                        {{-- model start --}}
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour12" aria-expanded="false"
                                    aria-controls="collapseFour12">
                                    <span class="button-label">Module 12</span>
                                    Cryptography
                                    <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour12" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <h6 class="syllabustitle">Introduction</h6> --}}
                                            <li class="syllabustext">Cryptography Concepts</li>
                                            <li class="syllabustext">Encryption Algorithms</li>
                                            <li class="syllabustext">Cryptography Tools</li>
                                            <li class="syllabustext">Public Key Infrastructure (PKI)</li>
                                            <li class="syllabustext">Email Encryption</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- model end --}}



                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class=" pb-5" id="div2">
        <div class="container">
            <div class=" text-left">
                <h5 class="border-title2">Learning Outcomes</h5>
            </div>
            <div class="row align-items-start">
                <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">
                                Illustrate Information security threats and vulnerabilities, types of malwares, and
                                vulnerability assessments </h6>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">
                                Identify common tools and techniques used by cybersecurity analysts
                            </h6>

                        </div>
                    </div>
                    
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">
                                Evaluate Network-level attacks including sniffing, denial-of-service, and session hijacking, and their countermeasures </h6>

                        </div>
                    </div>
                    <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">
                                Application-level attacks including webserver exploitation, OWASP top10 attacks, and SQL injection and their countermeasures</h6>

                        </div>
                    </div>
                    <strong>Duration:</strong><span> 48 hours</span>
                    

                    {{-- <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">

                                Identify common tools and techniques used by cybersecurity analysts</h6>

                        </div>
                    </div> --}}
                    {{-- <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">

                                Evaluate Network-level attacks including sniffing, denial-of-service, and session hijacking,
                                and their countermeasures</h6>

                        </div>
                    </div> --}}
                    {{-- <div class="process-style1 d-flex align-items-center">
                        <span class="process-number"><i class="fas fa-circle"></i></span>
                        <div class="process-content">
                            <h6 class="process-title">
                                Application-level attacks including webserver exploitation, OWASP top10 attacks, and SQL
                                injection and their countermeasures </h6>

                        </div>
                    </div> --}}

                </div>


            </div>
        </div>
    </section>

    <section class="pt-3 pb-3 background-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 m-auto">
                    <div class="title-area   -animated" data--delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: ;">


                        <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
                        <h5 class="border-title2">Salient Features</h5>
                    </div>
                </div>
            </div>
            <div class="row   -animated" data--delay="0.4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: ;">

                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg"
                                alt="icon"></div>

                        <h5 class="media-title"> Comprehensive Coverage</h5>
                        <p>Addresses key aspects of cybersecurity including information security fundamentals, ethical hacking, threat and vulnerability assessment, social engineering, network and web application security, and penetration testing.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">

                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg"
                                alt="icon"></div>
                        <h5 class="media-title">Preventive Measures</h5>
                        <p> Focuses on countermeasures for various cyber threats like malware, social engineering, DoS/DDoS, session hijacking, and web application attacks.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="media-style9">
                        <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg"
                                alt="icon"></div>
                        <h5 class="media-title">Legal and Ethical Awareness</h5>
                        <p>Covers information security laws and regulations, emphasizing ethical hacking principles and legal compliance.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="pt-5 pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-md-12">
                    <h5 class="border-title2 pb-3">Recommended For</h5>
                </div>
                <div class="col-md-12">
                    <div class="process-style1 d-flex align-items-center">
                        <div class="process-content">
                            <p class="fs-md process-title">Sales and Marketing Analysis, Business Analysts, Finance & Accounts, Data Analysts and Data Scientists, Project Managers, Operations and Logistics Manager, HR Professionals, IT Professionals</P>
                        </div>
                    </div>
                </div>
    </section>
    <section class="pt-5 pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-md-12">
                    <h5 class="border-title2 pb-3">Difficulty Level</h5>
                </div>
                <div class="col-md-12">
                    <div class="process-style1 d-flex align-items-center">
                        <div class="process-content">
                            <p class="fs-md process-title">Beginners to Intermediate</P>
                        </div>
                    </div>
                </div>
    </section>
    {{-- <section class="pt-3 pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-md-12">
                    <h5 class="border-title2 pb-3">Target Audience</h5>
                </div>
                <div class="col-xl-10">
                    <div class="row gx-80 align-items-center">
                        <div class="col-sm-6 col-xl-4">
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title">Data Analyst</P>
                                </div>
                            </div>

                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> IT professionals</P>
                                </div>
                            </div>

                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Students pursuing a career in Cyber Security</P>
                                </div>
                            </div>




                        </div>
                        <div class="col-sm-6 col-xl-4">




                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Small business owners and managers </p>
                                </div>
                            </div>
                            <div class="process-style1 d-flex align-items-center">
                                <span class="process-number"><i class="fas fa-circle"></i></span>
                                <div class="process-content">
                                    <p class="fs-md process-title"> Anyone interested in understanding Cyber Security </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section> --}}
    <section class="pb-3">
        <div class="container">
            <div class="row gx-80 align-items-center">
                <div class="col-xl-12">
                    <h5 class="border-title2 pb-2">Pre-Requisite</h5>
                </div>
                <div class="col-xl-12">
                    <div class="title-area mb-4">
                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                            <div class="process-content">
                                <p class="fs-md process-title ">Basic computer literacy</p>
                            </div>
                        </div>
                    </div>

                    <div class="title-area mb-4">
                        <div class="process-style1 d-flex align-items-center">
                            <span class="process-number"><i class="fas fa-circle"></i></span>
                            <div class="process-content">
                                <p class="fs-md process-title ">No prior cybersecurity knowledge required</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h5 class="border-title2 ">Trainer Profile</h5>
                </div>
                <div class="col-lg-6" style="padding:0">
                    <div class="title-area mb-4">
                        <h5 class="sec-title mb-3 mb-lg-4" style="font-size: 30px;">Zeeshan Zubair</h5>
                        <p class="about-text pe-xl-5 me-xl-3 fs-md">
                            is currently working in Hilal Foods Pvt Ltd as Manager Business Intelligence. He has completed MBA-MIS from PIMSAT.
                             He has very rich and diversified industry experience of over 15 years which includes: FMCGS, 
                             Textile and also serve as technical consultant in Inbox Pvt Ltd. And 3cs Pvt Ltd. Specialized in databases 
                             i.e., Oracle & SQL Server which enables him to present the Zeeshan insights from the data to the organizations 
                             and also working on Data Security and Data loss prevention. Zeeshan is associated with YouExcel As the Visiting 
                             Faculty.

                        </p>
                    </div>
                    <h5>Professional Certifications:</h5>
                    <div class="list-style1 vs-list mb-30">
                        <ul>
                            <li>CompTIA Security+ SY0-701</li>
                            <li>CHFI (Certified Hacker Forensics Investigator)</li>
                            <li>Certified Information Security Manager – CISM</li>
                            <li>Oracle Certified Professional – OCP-DBA Track</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-box3 mb-30">
                        <div class="img-1 mega-hover"><img class="" src="{{ asset('/img/trainer/zeeshan.jpeg') }}"
                                alt="About Img" style="width: 502px;border-radius: 50px;"></div>
                        <div class="shape-dotted jump"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-3">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6" style="padding:0">
                    <h5>Value Added Services</h5>
                    <div class="list-style1 vs-list mb-30">
                        <ul>
                            <li>100% job and business oriented training.</li>
                            <li>Certificate of completion recognized from Trade Testing Board, Government of Pakistan.</li>
                            <li>Claim Continuing Professional Development (CPD) hours for the training.</li>
                            <li>Video recorded session with personalized Learning Management System (LMS) access login id for 12 months</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="pb-5">
        <div class="shape-mockup jump d-none d-xxl-block" data-right="10%" data-bottom="12%">
            <div class="shape-dotted"></div>
        </div>
        <div class="shape-mockup rotate d-none d-xxl-block" data-right="48%" data-top="17%">
            <div class="vs-polygon1"></div>
        </div>
        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="51%" data-top="21%">
            <div class="vs-rounded1"></div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12 col-xxl-5">
                    <div class="title-area wow fadeInUp" data-wow-delay="0.3s">

                        <h2 class="sec-title h1">REAL PEOPLE REAL TESTIMONIALS</h2>

                    </div>

                    <div class="elfsight-app-180aecff-7be3-49b6-9603-28a80d740006"></div>


                </div>
            </div>
    </section> --}}




    <section class="pb-5">
        <div class="container pb-3">
        </div>
        <div class="container cta-style2" style="border: 3px solid #fbce4d;">
            <div class="row gx-100 gy-4">
                <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">
                    <h2 class=" pt-1  text-white">Become smarter in just 24 hours </h2>
                    <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
                    <br>
                </div>
            </div>
            <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">
                    <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                        <a href="../Registration-Form/cyber-security" class="vs-btn style2"><i
                                class="far fa-angle-right"></i>GET REGISTERED HERE</a>
                        <!--<button type="submit" class="vs-btn mx-3">GET REGISTERED HERE</button>-->
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="modal bd-example-modal-lg" id="myModal" style="z-index:99 ">
        <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
            <div class="modal-content"style="
        background-color: transparent;
    ">
                <div class="modal-body" style="position:relative;height: 106vh;">
                    <span class="close">&times;</span>
                    <div class="wrapper">
                        <div class="container">
                            <canvas id="wheel"></canvas>
                            <!--<button id="spin-btn">Spin</button>-->
                            <i class="fas fa-caret-left img" style=" color: #fdcf3b;font-size:80px"></i>
                        </div>
                        <div id="final-value">
                            <p>Click On The Spin Button To Start</p>
                        </div>
                    </div>
                    <form action="mail.php" class="form-stylea ajax-contact">
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-top="10%">
                            <div class="vs-rounded2"></div>
                        </div>
                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-top="13%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-top="13%">
                            <div class="vs-rounded2"></div>
                        </div>

                        <h2 class="">SPIN TO WIN </h2>
                        <h5 class="border-title2 fs-md ">Test your might!</h5>

                        <div class="row">


                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <input type="text" name="name" id="name"
                                        placeholder="Complete Name"required>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" name="number" id="number" placeholder="Cell No.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="number" id="number" placeholder="WhatsApp No. ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="subject" id="subject">
                                        <option selected hidden disabled>Select Course</option>
                                        <option value="Other">Other</option>
                                        <option value="Apply Scholarship">Apply Scholarship</option>
                                        <option value="Private Tutor">Private Tutor</option>
                                        <option value="Admission Session">Admission Session</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="city" placeholder="Your City" required="" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <input name="comments" placeholder="Comments" type="text">
                        </div>
                        <div class="captcha d-flex item-center mb-4">
                            <div class="spinner d-flex item-center">
                                <label class="mb-0 mt-3 mx-3">

                                    <input type="checkbox" onclick="$(this).attr('disabled','disabled');" required>
                                    <span class="checkmark"><span>&nbsp;</span></span>
                                </label>
                            </div>
                            <div class="text1">
                                I'm not a robot
                            </div>
                            <div class="logo">

                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG" />
                                <p>reCAPTCHA</p>
                                <small>Privacy - Terms</small>
                            </div>
                        </div>

                        <button id="spin-btn" class="vs-btn">Spin the wheel</button>

                        <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
                            <div class="vs-polygon2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
                            <div class="vs-rounded2"></div>
                        </div>
                        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="30%" data-bottom="8%">
                            <div class="vs-rounded2"></div>
                        </div>
                </div>
            </div>
        </div>
        <p class="form-messages"><span class="sr-only">For message will display here</span></p>
        </form>


    </div>
    </div>
    </div>
    </div>
@endsection
