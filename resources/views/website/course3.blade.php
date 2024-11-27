@extends('website.app', ['title' => 'Data Analytics with SQL (Basic to Advanced)'])

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">SQL for Beginners: Launch Your Data Analytics Career. Start Your SQL Data Analytics Training Today!</h1>
                {{--                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p>--}}
                <!--<div class="breadcumb-menu-wrap">-->
                <!--    <ul class="breadcumb-menu">-->
                <!--        <li><a href="{{url("/")}}">Home</a></li>-->
                <!--        <li>Dashboard Reporting & Analysis with Power BI</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </div>
    </div> <!--==============================
      Course Area
  ==============================-->
    <section class="course-details pt-3  pb-3">
        <div class="container">
             <!--<td>Beginner to Advanced</td>-->
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                              <tr class=" mb-4">
                                      
                         <td> <img src="https://youexceltraining.com/img/Yourexcel-img/sql.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 24 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  &nbsp;  Beginner to Advanced</td>
                             </tr>  
                                                         <tr>
                                <td><i class="far fa-suitcase"></i>This Training also includes:</td>
                                 </tr>    <tr>
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
                          @if($pdf == "" )
                                      
                                      @else
                        <a href="{{$pdf}}" class="vs-btn"><i class="fas fa-hand-point-down"></i> Download Brochure Now</a><br/><br/>
                        
                          @endif
                        <a href="https://youexceltraining.com/enquiry-form/sql-analytics" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>


          



                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                           <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Data Analytics with SQL (Basic to Advanced)</h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                    
                       <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/sqlb.jpg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview</h5>
                    <p  class="wow fadeInDown pb-3">Data is all around us, but without insights and analytics it’s just the numbers. Applying SQL (Structured Query Language), a standard language for database creation is core and plays vital role in performing analysis on data. SQL is used for data modeling to data retrieval.
                         SQL is the most in-demand and widely used analytics stack offered by Microsoft.</p>
                          <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>
    </div>
                <div class="col-lg-12">
                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item active wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Foundation of SQL and Databases                                 <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">What is SQL and why is it used?</li>
                                            <li class="syllabustext">Flavors of SQL</li>
                                            <li class="syllabustext">Tables, Rows, and Columns</li>
                                            <li class="syllabustext">Concept of ERD (Entity Relationship Diagram)</li>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTwo">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="button-label">Module 2</span>
                                    Writing Basic SQL Statements 
                                 <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Syntax of Select Statement</li>
                                            <li class="syllabustext">Select all columns and specific columns from table</li>
                                            <li class="syllabustext">Ordering the results</li>
                                            <li class="syllabustext">Returning only Distinct records (eliminating duplicates) from table</li>
                                            <li class="syllabustext">Filtering results using WHERE clause</li>
                                            <li class="syllabustext">Pattern Matching</li>
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header d-flex" id="headingThree">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    <span class="button-label">Module 3</span>
                                    Aggregate and Date Functions
                                 <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                            <p class="syllabustitle">Introduction</p>--}}
                                            <li class="syllabustext">Sum, Count, Min, Max</li>
                                            <li class="syllabustext">Date Functions: Year, Month, Day</li>
                                            <li class="syllabustext">Data Types</li>
                                            <li class="syllabustext">Calculating days between two different dates</li>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 4</span>
                                    SQL Joins
                                 <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="syllabustitle">Introduction</p>--}}
                                            <li class="syllabustext">Understanding Table Relationships</li>
                                            <li class="syllabustext">Constraints: Primary Key and Foreign Key Concepts</li>
                                            <li class="syllabustext">Joins: Inner and Outer Joins</li>
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour1" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 5</span>
                                    Subqueries                                  <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="syllabustitle">Introduction</p>--}}
                                            <li class="syllabustext">Subqueries: Queries within queries</li>
                                            <li class="syllabustext">String Functions</li>
                                            <li class="syllabustext">Date Functions</li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour2" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 6</span>
                                    Case Statements (Conditional Statements)                                 <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="syllabustitle">Introduction</p>--}}
                                            <li class="syllabustext">Case Statements</li>
                                            <li class="syllabustext">Simple CASE vs Searched CASE Statements</li>
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour3" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 7</span>
                                    Database Views                                  <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="syllabustitle">Introduction</p>--}}
                                            <li class="syllabustext">What are views</li>
                                            <li class="syllabustext">Advantages and Disadvantages of Views</li>
                                            <li class="syllabustext">How to create and use views</li>
                                            
                                            

    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour4" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">Module 8</span>
                                    Way Forward: Steps Towards Data Analysis/Science Career                                 <i class="fas fa-angle-down"></i></button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                            <p class="syllabustitle">Introduction</p>--}}
                                            <li class="syllabustext">Clean and re-structure messy data.</li>
                                            <li class="syllabustext">Convert columns to different data types.</li>
                                            <li class="syllabustext">Manipulating nulls.</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
             </div>
                </div>
            </div>
 
    </section>

                <section class=" pb-3" id="div2">
   <div class="container">
      <div class=" text-left">
     

         <h5 class="border-title2">Learning Outcomes</h5>
      </div>
      <div class="row align-items-start">
         <div class="col-md-6 col-lg process-inner1 order-2 order-lg-1">
              <div class="process-style1 d-flex align-items-center">
               <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                 <p class="process-title">Learn and simulate structured query language (SQL) from basic to advanced level</p>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="process-title">	Write complex SQL join queries across multiple tables</p>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="process-title">	Model real-world data and generate reports using SQL </p>
            
               </div>
            </div>
            <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="process-title">	Answer company performance or sales questions using data</p>
                 
               </div>
            </div>
            
             <div class="process-style1 d-flex align-items-center">
             <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="process-title">	Apply SQL to perform data analysis</p>
                 
               </div>
            </div>
         </div>
         <!--<div class="col-lg-5 order-3 order-lg-2 mb-30 mb-md-5 mb-lg-0">-->
         <!--  <div class="img-box3 mb-30">-->
         <!--      <div class="img-1 mega-hover"><img src="https://html.vecurosoft.com/educino/demo/assets/img/about/about-2-1.png" alt="banner"></div>-->
         <!--      <div class="shape-dotted jump"></div>-->
         <!--   </div>-->
           
            
         <!--</div>-->
        
      </div>
   </div>
</section>

            <section class="pt-3 pb-3 background-image" >
   <div class="container">
      <div class="row">
         <div class="col-xl-12 m-auto">
            <div class="title-area   -animated" data--delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: ;">
             
              
               <!--<span class="sec-subtitle">IDEAL TUTOR FOR EVERYONE</span>-->
               <h5 class="border-title2">Features and Benefits</h5>
            </div>
         </div>
      </div>
      <div class="row   -animated" data--delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: ;">
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9" >
            
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-1.svg" alt="icon"></div>
               <h5 class="media-title">User-friendly data retrieval </h5>
               
               <!--<p>DucDucamb welcomed every pain mstances owing to the claims of will frequently.</p>-->
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                  
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
               <h5 class="media-title">Data modification with ease</h5>
               <!--<p>DucDucamb welcomed every pain mstances owing to the claims of will frequently.</p>-->
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                     
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
               <h5 class="media-title">Data integrity for seem less data 
    presentation
</h5>
             
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                     
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
               <h5 class="media-title">	Joining tables for comprehensive
    insights
 </h5>  <br>  
               
            </div>
         </div>
      
          
          </div>
   </div>
</section>

        <section class="pt-3 pb-3">
   <div class="container" >
      <div class="row gx-80 align-items-center">
          <div class="col-md-12" >
                      <h5 class="border-title2 pb-3">Target Audience</h5>
      </div>
         <div class="col-xl-10" >
               <div class="row gx-80 align-items-center">
            <div class="col-sm-6 col-xl-4">
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Business Analysts </p>
                 
                  </div>
                        </div>  <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Finance & Accounts</p>
                 
                  </div>
                        </div>
                                                              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> Accounts </p>
                 
                  </div>
                        </div>
          </div>
          <div class="col-sm-6 col-xl-4">
              <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Data Analysts </p>
                 
                  </div>
                        </div>
                        
                          <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Data Scientists</p>
                 
                  </div>
                        </div>
                         <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title"> IT Professionals</p>
                 
                  </div>
                        </div>
              
               </div>
               
          </div>
    </div>
        </section> 
        
        
                                                <section class="pb-3">
   <div class="container" >
      <div class="row gx-80 align-items-center">
          <div class="col-xl-12" >
                      <h5 class="border-title2 pb-2">Prerequisites</h5>
      </div>
         <div class="col-xl-12" >
            <div class="title-area mb-4">
                 <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title ">Basic computer literacy, familiarity with Windows operating system
 </p>
                 
                  </div>
                        </div>
              
                  </div>
              </div>
          </div>
    </div>
        </section> 
                  
             <section class="pb-3">
   <div class="container">
      <div class="row ">
           <div class="col-xl-12" >
                   <h5 class="border-title2 pb-3">Trainer Profile</h5>
       </div>
         <div class="col-lg-6" style="padding:0">
            <div class="title-area mb-4">
   
               <h5 class="sec-title mb-3 mb-lg-4" style="    font-size: 30px;
">Zeeshan Zubair</h5>
               <p class="about-text pe-xl-5 me-xl-3 fs-md">Zeeshan Zubair is currently working in Hilal Foods Pvt Ltd as Manager Business Intelligence. He has completed MBA-MIS from PIMSAT. He has very rich and diversified industry experience of over 15 years which includes: FMCGS, Textile and also serve as technical consultant in Inbox Pvt Ltd. And 3cs Pvt Ltd. Specialized in databases i.e., Oracle & SQL Server which enables me to present the insights from the data to the organizations and also working on Data Security and Data loss prevention. Zeeshan is associated with YouExcel As the Visiting Faculty. </p>
            </div>
                <h5>Professional Certifications:</h5>
            <div class="list-style1 vs-list mb-30">
               <ul>
                 <li>Oracle Certified Professional – OCP-DBA Track</li>
    <li>Certified Information Security Manager – CISM</li>
    
               </ul>
            </div>
         </div>
            <div class="col-lg-6">
            <div class="img-box3 mb-30">
               <div class="img-1 mega-hover"><img class="" src="{{ asset('/img/trainer/zeeshan.jpeg') }}"  alt="About Img" style="
    width: 502px;
    border-radius: 50px;
"></div>
               <div class="shape-dotted jump"></div>
            </div>
         </div>
      </div>
   </div>
</section>     
                  

  
  <section class="pb-5">
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
    </section>
    
  
    
    <section class="pb-5">
           <div class="container pb-3">
               
        
                </div>
                          <div class="container cta-style2" style="
    border: 3px solid #fbce4d;
">
              <div class=" row gx-100 gy-4  ">
             <div class="col-lg-12 col-xl-12 col-xxl-12 pt-2 pb-5 text-center">         
               
             <h2 class=" pt-1  text-white">Become smarter in just 24 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/SQL for Data Analytics " class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
                    <!--<button type="submit" class="vs-btn mx-3">GET REGISTERED HERE</button>-->
                    </form>
                </div>
               
                  </div>
                  </div>
               
        </section>
    
    <div class="modal bd-example-modal-lg" id="myModal"  style="z-index:99 " >
  <div class="modal-dialog" style="width:100% ; background-color: #f7a530;" role="document">
    <div class="modal-content"style="
    background-color: transparent;
" >
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
                            <input type="text" name="name" id="name" placeholder="Complete Name"required >
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
     <input name="city" placeholder="Your City"                                            required=""
                                               type="text">
                        </div>
                        </div>
                       </div>
                           <div class="form-group">
                               
                         <input  name="comments" placeholder="Comments" type="text">
                        </div>
                         <div class="captcha d-flex item-center mb-4">
                                            <div class="spinner d-flex item-center">
                                                <label class="mb-0 mt-3 mx-3">
                                                    
                                                    <input type="checkbox"

                                                           onclick="$(this).attr('disabled','disabled');"
                                                           required>
                                                    <span class="checkmark"><span>&nbsp;</span></span>
                                                </label>
                                            </div>
                                            <div class="text1">
                                                I'm not a robot
                                            </div>
                                            <div class="logo">
                                                
                                                <img src="https://youexceltraining.com/img/Yourexcel-img/captcha.PNG"/>
                                                <p>reCAPTCHA</p>
                                                 <small>Privacy - Terms</small> 
                                            </div>
                                        </div>
                        
                         <button id="spin-btn"  class="vs-btn">Spin  the wheel</button>
                         
                      <div class="shape-mockup rotate d-none d-xxl-block" data-right="19%" data-bottom="8%">
            <div class="vs-polygon2"></div>
        </div>    <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="11%" data-bottom="8%">
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
