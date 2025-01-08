@extends('website.app')

@section('title', 'Financial Modeling and Analysis Course in Karachi Pakistan')
@section('meta_description', 'Enroll in the Financial Modeling and Analysis Course in Karachi, Pakistan. Master financial forecasting, budgeting, and modeling techniques to advance your career.')
@section('meta_keywords', 'Financial Modeling and Analysis Course in Karachi Pakistan')


@section('content')
    <div class="breadcumb-wrapper " data-bg-src="">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                             <h1 class="breadcumb-title">Transform Your Financial Analysis Skills to Next Level: Learn Financial Modeling & Valuation Now!</h1>
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
    <section class="course-details pt-3 pb-3">
        <div class="container">
                   <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <div class="course-meta-box wow fadeInUp ">
                        <table>
                            <tbody>
                              <tr class=" mb-4">
                                      
                        <td> <img src="https://youexceltraining.com/img/Yourexcel-img/fma.jpg" /> </td>
                     </tr> 
                                
                            <tr>
                            <td ><i class="far fa-hourglass"></i> Duration:  &nbsp; 36 hours</td>
                           </tr>
                            <tr style="padding-top: 8px;">
                                <td>
                                <i class="far fa-suitcase"></i>Difficulty Level:  &nbsp;  Beginner to Intermediate</td>
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
                        <a href="https://youexceltraining.com/enquiry-form/financial-modeling" class="vs-btn">Enquire Now</a><br/><br/>
                        <!--<a href="contact.html" class="vs-btn" style="padding:3.5px 40px; line-height:22px">Corporate <br> Training Consultancy</a>-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course-category wow fadeInUp ">
                        <a href="#">Get Started Learning with</a>
                    </div>
                    <h2 class="course-title animate__animated animate__bounceInDown">Financial Modeling and Analysis (Fundamental Level) </h2>
                    <div class="course-review"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>( 5.0 )
                    </div>
                       <div class="mb-3">
                          <img src="https://youexceltraining.com/img/Yourexcel-img/fmab.jpg" /> 
                     </div>
                    <h5 class="border-title2 wow fadeInUp ">Program Overview:</h5>
                    <p  class="wow fadeInDown pb-3">Financial Modeling and Analysis training is a competency-based course adopting structured approach to translating business insights through numerous data visualization tools using dynamic Financial Dashboards. It also fulfils the need of Business Presentation skills in perspective of delivering an impactful
                         presentation to business leaders in a succinct manner.</p>
         <h5 class="border-title2 wow fadeInUp ">Training Outline</h5>
                </div>
                <div class="col-lg-12">
                    <div class="accordion accordion-style4" id="accordionExample">
                        <div class="accordion-item active wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingOne">
                                <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="button-label">Module 1</span>
                                    Basics of Modeling and Analysis
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            <li class="syllabustext">Basics and Advance Functions</li>
                                            <li class="syllabustext">Data tools</li>
                                            <li class="syllabustext">Project timeline</li>
                                            <li class="syllabustext">IF Conditions and nested IF conditions</li>
                                            <li class="syllabustext">Dynamic reports</li>

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
                                    Accounting Model and Data Visualization
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Create a Trial Balance</li>
                                            <li class="syllabustext">Prepare a Stock Summary</li>
                                            <li class="syllabustext">Create a Dashboard</li>
                                            <li class="syllabustext">Maturity Statements</li>
                                            <li class="syllabustext">Financial Statements</li>
                                            


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
                                    Feasibility Model
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInUp ">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Basic assumptions and inputs</li>
                                            <li class="syllabustext">Financial ratios</li>
                                            <li class="syllabustext">Construct a three-statement model</li>
                                            <li class="syllabustext">Dynamic Dashboards</li>
                                            <li class="syllabustext">Analyze the outputs</li>
                                            
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
                                    <span class="button-label">Module 4</span>Comparative Case Study
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Centralized database for company financials</li>
                                            <li class="syllabustext">Perform comparative analysis</li>
                                            <li class="syllabustext">Annual and quarterly comparative study</li>
                                            <li class="syllabustext">Valuation ratios</li>
                                            <li class="syllabustext">Graphical analysis</li>
                                            


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
                                    <span class="button-label">Module 5</span>DCF Valuation and Sensitivity Analysis
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Forecasting free cash flows (FCFs)</li>
                                            <li class="syllabustext">Calculate the discount rate (WACC)</li>
                                            <li class="syllabustext">Terminal Values and NPV of terminal values</li>
                                            <li class="syllabustext">Calculate the Intrinsic Value</li>
                                            <li class="syllabustext">Sensitivity Analysis of Share Price and terminal value</li>
                                            

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
                                    <span class="button-label">Module 6</span>Financial Dashboards & Dyn Connections
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour2" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Insert a Pivot Table</li>
                                            <li class="syllabustext">Slicers and report connections</li>
                                            <li class="syllabustext">Combo chart with secondary axis</li>
                                            <li class="syllabustext">Insert timeline</li>
                                            <li class="syllabustext">Insert 3D Charts</li>
                                            <li class="syllabustext">Dynamic connections and power query</li>


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
                                    <span class="button-label">Module 7</span>Other Advance Excel Formulae with Application
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour3" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Get Data from different resources</li>
                                            <li class="syllabustext">Create relationships</li>
                                            <li class="syllabustext">Insert pivot tables</li>
                                            <li class="syllabustext">Power query for dynamic path</li>
                                            <li class="syllabustext">Create dynamic and Power dashboard</li>

    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingEight">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight8" aria-expanded="false"
                                        aria-controls="collapseEight">
                                    <span class="button-label">Module 8</span> Introduction To Power BI Desktop
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseEight8" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Overview of Power BI Desktop, Power BI Service, and Power BI Mobile</li>
                                            <li class="syllabustext">Data Importing from various data sources like Excel, SQL Server, and online services to Power BI</li>
                                            <li class="syllabustext">Data Transformation through Power Query Editor for cleaning and transforming data</li>
                                            <li class="syllabustext">Creating a Report with simple dashboards visualizations techniques using built-in Power BI features</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingNine">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine9" aria-expanded="false"
                                        aria-controls="collapseNine">
                                    <span class="button-label">Module 9</span> Creating Financial Models In Power BI
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseNine9" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Financial Data Modeling Techniques using tables, relationships, and calculated columns</li>
                                            <li class="syllabustext">Introduction to Data Analysis Expressions (DAX) formulas for creating complex calculations and financial metrics</li>
                                            <li class="syllabustext">Scenario and Sensitivity Analysis for various financial scenarios and perform sensitivity analysis within Power BI</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingTen">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen10" aria-expanded="false"
                                        aria-controls="collapseTen">
                                    <span class="button-label">Module 10</span> Storytelling of Financial Models Analysis through Power BI
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseTen10" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Creating Charts, Graphs, and custom visuals to enhance insights</li>
                                            <li class="syllabustext">Building Advanced visuals like waterfall charts, gauge charts, and scatter plots to represent financial data</li>
                                            <li class="syllabustext">Interactivity and Drill-Down techniques to add interactivity and dynamic filtering to financial reports</li>
                                            <li class="syllabustext">Storytelling strategies to communicate financial insights effectively through dashboards and narratives</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingEleven">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven11" aria-expanded="false"
                                        aria-controls="collapseEleven">
                                    <span class="button-label">Module 11</span> Introduction to AI and Machine Learning Visualization in Power BI
                                    <i class="fas fa-angle-down"></i> 
                                </button>
                            </div>
                            <div id="collapseEleven11" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                 data-bs-parent="accordionExample">
                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">
                                        <div class="syllabus-content">
                                            <li class="syllabustext">Apply 'Forecast' feature to predict future trends based on historical data</li>
                                            <li class="syllabustext">Evaluate Anomaly Detection to identify discrepancies and outliers in datasets</li>
                                            <li class="syllabustext">Trend Analysis to interpret trends within plotted data for better insights</li>
                                            <li class="syllabustext">Exploratory Data Analysis (EDA) for mean, median, minimum, maximum, and percentiles on visuals to explore and analyze their impact on data</li>
                                            <li class="syllabustext">Regression Models with 'Measures' to predict values and derive insights</li>
                                            <li class="syllabustext">Decomposition Tree to break down the dimensions of a particular matrix</li>
                                            <li class="syllabustext">Apply in-built machine learning algorithm to identify Key Influencer Visual</li>
                                            <li class="syllabustext">Examine data through Q&A visual by writing natural language queries and ask questions about your data interactively</li>
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
                                    <span class="button-label">BONUS  1</span>Budget Forecasting
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Actual v/s Budget comparison</li>
                                            <li class="syllabustext">Variance Analysis</li>
                                            <li class="syllabustext">Linear forecast</li>
                                            <li class="syllabustext">Seasonality forecast</li>
                                            <li class="syllabustext">Forecast sheet</li>
                                            <li class="syllabustext">Dynamic v/s static reports</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour5" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">BONUS 2</span>Data Handling with Macros
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour5" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Create a macro for Sales Summary</li>
                                            <li class="syllabustext">Create a macro for posting records</li>
                                            <li class="syllabustext">VBA editor - lock project for viewing</li>
                                            <li class="syllabustext">Bulk record postings</li>
                                            <li class="syllabustext">Fetch records from different database</li>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour6" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">BONUS  3</span>Inventory Model
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour6" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Inventory Inwards</li>
                                            <li class="syllabustext">Inventory Outwards</li>
                                            <li class="syllabustext">Dispatch Program</li>
                                            


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp ">
                            <div class="accordion-header d-flex" id="headingFour">
                                <button class="accordion-button justify-content-between " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour7" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    <span class="button-label">BONUS  4</span>Interview Model
                               <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <div id="collapseFour7" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="accordionExample">

                                <div class="accordion-body wow fadeInDown">
                                    <div class="syllabus-list">

                                        <div class="syllabus-content">
                                            {{--                                             <p class="syllabustitle">Introduction </p>--}}
                                            <li class="syllabustext">Database – Questions with MCQs</li>
                                            <li class="syllabustext">Record a Macro</li>
                                            <li class="syllabustext">To Start Interview</li>
                                            <li class="syllabustext">To Lock Answer</li>
                                            <li class="syllabustext">To Next Question </li>
                                            <li class="syllabustext">To Stop Interview and Save Statistics </li>


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
                  <p class="process-title">Construct Dynamic Financial Models </p>
               
               </div>
            </div>
           <div class="process-style1 d-flex align-items-center">
  <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                   <p class="process-title">Create visually effective Dashboards through Power Query </p>
              
               </div>
            </div>
                <div class="process-style1 d-flex align-items-center">
        <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                   <p class="process-title">Analyze Dashboards to gain business insights </p>
            
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
               <!--<h5 class="media-title">Spreadsheet Organization</h5>-->
               
               <p>	Better understanding of business by building solid foundation on modeling techniques</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9" >
                     
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-3.svg" alt="icon"></div>
          
              <p>Minimizing through sensitivity analysis to assess the impact of changing variables</p>
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                      
               <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-4.svg" alt="icon"></div>
           <p>Creating financial forecasts through effective power dashboards</p>
               
            </div>
         </div>
         <div class="col-sm-6 col-xl-4">
            <div class="media-style9" >
                   <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-5.svg" alt="icon"></div>
              <p>Establishing dynamic connections between data sets to ensure streamlined data updates and analysis through dynamic connections   </p>
            </div>
         </div>
           <div class="col-sm-6 col-xl-4">
            <div class="media-style9">
                    <div class="media-icon"><img src="https://youexceltraining.com/img/icon/training-icon-1-2.svg" alt="icon"></div>
             <p>Business valuation of real-world financial scenarios</p>
              
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
                  <p class="fs-md process-title">Accounting </p>
                 
                  </div>
                        </div>
          </div>
          <div class="col-sm-6 col-xl-4">
         <div class="process-style1 d-flex align-items-center">
              <span class="process-number"><i class="fas fa-circle"></i></span>
               <div class="process-content">
                  <p class="fs-md process-title">Finance Team</p>
                 
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
                      <h5 class="border-title2 pb-3">Trainer Profile</h5>
      
         <div class="col-lg-6"  style="padding:0">
            <div class="title-area mb-4">
   
               <h5 class="sec-title mb-3 mb-lg-4" style="    font-size: 30px;
">Tanweer Bukhsh</h5>
               <p class="about-text pe-xl-5 me-xl-3 fs-md">He has vast practical experience of working in equity market has enabled him to apply tools and techniques in Financial Modeling and Analysis training.
                                    He is passionate to share his practical experience of over 19 years of working in the industry with his students to help learn from real-life case studies.</p>
            </div>
    <!--            <h5>Professional Certifications:</h5>-->
    <!--        <div class="list-style1 vs-list mb-30">-->
    <!--           <ul>-->
    <!--             <li>Microsoft Certified Trainer</li>-->
    <!--<li>Microsoft Office Specialist Master – 2013 &amp; 2016</li>-->
    <!--<li>Microsoft Excel Expert - 2013 &amp; 2016</li>-->
    <!--<li>Microsoft Word Expert - 2016</li>-->
    <!--<li>Microsoft Office Specialist - 2013 &amp; 2016</li>-->
    <!--           </ul>-->
    <!--        </div>-->
         </div>
            <div class="col-lg-6">
            <div class="img-box3 mb-30">
               <div class="img-1 mega-hover"><img class="" src="{{ asset('img/trainer/tanweer.png') }}" alt="About Img" style="
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
               
             <h2 class=" pt-1  text-white">Become smarter in just 36 hours </h2>
             <!--<p class=" pt-1 fs-md text-white">Enter your email id to get latest updates and  amazing discounts</p>-->
               <br>
               
               </div>
               </div>
                  <div class="row gx-100 gy-4 pb-5 justify-content-md-center ">
               
                <div class="col-lg-10 col-xl-10 col-xxl-10 pb-5 ">   
                
                <form class="newsletter-form d-flex flex-row justify-content-center align-items-center">
                   <a href="../Registration-Form/Financial Modeling and Analysis" class="vs-btn style2"><i class="far fa-angle-right"></i>GET REGISTERED HERE</a>
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
