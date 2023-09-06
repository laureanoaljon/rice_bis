<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <title>Genelytics - Home</title>  
    <link rel="icon" href="<?php echo base_url(); ?>assets/philrice-logo.png" type="image/x-icon">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M5PHBHZ');</script>
    <!-- End Google Tag Manager -->

    <?php 
        echo link_tag('css/bootstrap-reboot.min.css');
        echo link_tag('css/bootstrap.min.css');
        echo link_tag('css/bootstrap-grid.min.css');
        echo link_tag('css/bootstrap-icons.css');
        echo link_tag('css/main-styles.css'); 
    ?>

    
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- FA icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome-4.7.0/css/font-awesome.min.css">

    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }

      .f-links{
        color: #99cc99;
      }

      .accession-number{
        color: #1BBF78;
        font-weight: bold;
        font-size: 60px;
      }

      .btn-create-account{
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .btn-black-bg{
        font-size: 29px !important;
        padding: 18px 18px 18px 18px !important;
        background-color: #0A290A !important;
        color: #1BBF78 !important;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .btn-black-bg:hover{
        transform: scale(1.015) perspective(1px);
        background: rgb(7,157,7);
        background: linear-gradient(0deg, rgba(7,157,7,1) 16%, rgba(10,41,10,1) 90%);
        color: white !important;
      }

      .btn-green-bg:hover{
        transform: scale(1.07) perspective(1px);
      }

      .btn-transparent-bg:hover{
        transform: scale(1.05) perspective(1px);
        background: rgb(10,41,10);
        background: linear-gradient(0deg, rgba(10,41,10,0.4206057422969187) 48%, rgba(7,157,7,0.9976365546218487) 92%);
        color: white !important;
      }
    </style>
</head>  
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5PHBHZ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #228B22; height: 75px;">
      <div class="container-fluid" style="margin-left: 150px;">
          <div class="navbar-collapse collapse">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link  active" href="<?php echo base_url(); ?>main">HOME<span class="sr-only">(current)</span></a>
                  </li>&emsp;&emsp;
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>genebank">ORYZA GEMS</a>
                  </li>&emsp;&emsp;
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>genelytics">GENELYTICS</a>
                  </li>&emsp;&emsp;
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>main/policy">POLICY</a>
                  </li>&emsp;&emsp;
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>main/contact_us">CONTACT US</a>
                  </li>&emsp;&emsp;
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>main/about_us">ABOUT US</a>
                  </li>
              </ul>
              <!-- <ul class="navbar-nav mr-auto" style="margin-left: 400px;">
                <?php if (isset($first_name)) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button">WELCOME, <b><?php echo strtoupper($first_name); ?></b></a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#" id="editProfile"><span><i class="fa fa-pencil"></i></span> EDIT PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>genelytics"><span><i class="fa fa-list"></i></span> MY STUDIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>main/logout"><span><i class="fa fa-sign-out"></i></span> SIGN OUT</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="signIn" style="float: right !important;">SIGN IN</a>
                    </li>
                <?php } ?>
              </ul> -->

              <ul class="navbar-nav mr-auto" style="margin-left: 300px !important;">
                <?php if (isset($first_name)) { ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      WELCOME, <b><?php echo strtoupper($first_name); ?></b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" style="color: #1BBF78 !important; text-align: left !important;" href="#" id="editProfile">&emsp;<span><i class="fa fa-pencil"></i></span> EDIT PROFILE</a>
                      <a class="dropdown-item mt-1" style="color: #1BBF78 !important; text-align: left !important;" href="<?php echo base_url(); ?>genelytics">&emsp;<span><i class="fa fa-list"></i></span> MY STUDIES</a>
                      <a class="dropdown-item mt-1" style="color: #1BBF78 !important; text-align: left !important;" href="<?php echo base_url(); ?>main/logout">&emsp;<span><i class="fa fa-sign-out"></i></span> SIGN OUT</a>
                    </div>
                  </li>
                <?php } else { ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="signIn" style="float: right !important;">SIGN IN</a>
                  </li>
                <?php } ?>
              </ul>
          </div>
      </div>
    </nav>

    <br>
    <br>
    <br>
    <div class="text-white jumbotron-fluid" id="gnltx-main-head">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8 text-white" style="margin-top: 80px;">
            <h1 class="f-60" style="font-weight: 900;">PhilRice Genebank</h1>
            <p class="f-18">PhilRice Genebank developed an Online version of GEMS Database to improve<br>
              breeders' access to genetic resources and quality information in support of<br>
              breeding new rice varieties.
            </p>
            <?php if (!isset($email)) {?>
              <br>
              <p><b>Sign in to access all our services</b></p>
              <form class="form-inline my-2 my-lg-0">
                <div class="col-md-4">
                  <input class="form-control mr-sm-2 w-100 rounded-pill" type="text" placeholder="Email" id="create_account_email" aria-label="Search" width="100" style="height: 50px;">
                </div>
                <a class="btn btn-success my-2 my-sm-0 rounded-pill btn-create-account btn-green-bg text-center" href="#" id="createAccountBtn" style="margin-left: -17px; height: 51px;"><b>&nbsp;&nbsp;Create Account&nbsp;&nbsp;</b></a>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 text-center d-flex justify-content-center" style="margin-top: -48px; text-align:center;">
      <a href="<?php echo base_url(); ?>genebank" class="btn btn-dark btn-lg text-center rounded btn-black-bg" role="button" aria-disabled="true">&emsp;&nbsp;<b>SEARCH FOR RICE DATA</b>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></span></a>&emsp;&emsp;&emsp;&emsp;
      <a href="<?php echo base_url(); ?>genelytics" class="btn btn-dark btn-lg text-center rounded btn-black-bg" role="button" aria-disabled="true">&emsp;&nbsp;<b>RUN GENE ANALYTICS</b>&nbsp;&nbsp;&nbsp;<span><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></span></a>
    </div>
  </header>

    <main>
      <section class="h-100 gradient-form mt-5">
        <div class="container-fluid py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="col-md-12 d-flex justify-content-center">
                      <h1 class="f-60"><b>How can we help you today?</b></h1>
                    </div>

                    <div class="col-md-12 d-flex justify-content-center">
                      <div class="col-md-4 text-center">
                        <p class="f-18">We are the national repository ot the Philippine traditional ricevarieties and other foreign-sourced rice genetic materials. We are mandated to collect, conserve, provide quality seeds and germplasm information needed by researchers, farmers, students and various stakeholders.</p>
                      </div>
                    </div>

                    <!-- <div class="col-md-12 d-flex justify-content-center mt-5">
                      <div class="col-md-2 text-center">
                        <h1 class="accession-number">1,282</h1>
                        <p class="f-18"><i>Accessions</i></p>
                      </div>
                      <div class="col-md-2 text-center">
                        <h1 class="accession-number">606</h1>
                        <p class="f-18"><i>Accessions</i></p>
                      </div>
                      <div class="col-md-2 text-center">
                        <h1 class="accession-number">202</h1>
                        <p class="f-18"><i>Accessions</i></p>
                      </div>
                      <div class="col-md-2 text-center">
                        <h1 class="accession-number">1,401</h1>
                        <p class="f-18"><i>Accessions</i></p>
                      </div>
                      <div class="col-md-2 text-center">
                        <h1 class="accession-number">2,509</h1>
                        <p class="f-18"><i>Accessions</i></p>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-12 d-flex justify-content-center mt-5">
                      <div class="col-md-5 text-center">
                        <p class="f-18">We are mandated to collect, conserve, provide quality seeds and germplasm information needed by researchers, farmers, students and various stakeholders.</p>
                      </div>
                    </div> -->

                    <div class="col-md-12 d-flex justify-content-center mt-4">
                      <div class="col-md-4 text-center" style="border: 4px solid green; padding: 20px 20px 20px 20px;">
                        <h1 class="f-60"><b>Oryza GEMS</b></h1>
                        <p class="f-16">The <strong>Oryza Germplasm Management System (Oryza GEMS)</strong> is a relational database management system developed to document, manage, and centralize the large quantities of data of all germplasm conserved in the Genebank. This includes germplasm data on passport, morpho-agronomic characterization, grain quality, biotic and abiotic stresses evaluations, viability conditions, and seed inventories. The GEMS database maintains an accurate, reliable and up-to-date rice germplasm information, thus, facilitates ease and efficient of data search and retrieval for better access and use of germplasm.</p>
                        <!-- <a href="<?php echo base_url(); ?>genebank" class="btn btn-success text-center" role="button" aria-disabled="true" style="margin-top: 40px;">&emsp;Browse the GEMS database&emsp;</a> -->
                      </div>
                      &emsp;
                      <div class="col-md-4 text-center" style="border: 4px solid green; padding: 20px 20px 20px 20px;">
                        <h1 class="f-60"><b>Genelytics</b></h1>
                        <p class="f-16">The <strong>GeneLytics portal</strong> is a visualization, exploration, and analysis tool of the germplasm data stored in the Oryza GEMS. Through this system, researchers and plant-breeders can be assisted in rice genetic research analysis and pre-breeding parental selection process. Different methods for diversity, frequency, and clustering analysis can be easily implemented to the germplasm of interest. Outputs are in the forms of graph, map, dendrogram, unrooted tree, and other similar representations.</p>
                        <!-- <a href="<?php echo base_url(); ?>genelytics" class="btn btn-success text-center" role="button" aria-disabled="true">&emsp;Go to Genelytics Portal&emsp;</a> -->
                      </div>
                    </div>
                    
                    <div class="col-md-12 text-center d-flex justify-content-center" style="margin-top: -25px;">
                      <div class="col-md-4 text-center">
                        <a href="<?php echo base_url(); ?>genebank" class="btn btn-success rounded-pill text-center btn-green-bg f-24" role="button" aria-disabled="true">&emsp;Browse the GEMS database&emsp;</a>
                      </div>
                      <div class="col-md-4 text-center">
                        <a href="<?php echo base_url(); ?>genelytics" class="btn btn-success rounded-pill text-center btn-green-bg f-24" role="button" aria-disabled="true">&emsp;Go to Genelytics Portal&emsp;</a>
                      </div>
                    </div>
                    <br>
                    <div class="col-md-12 text-center d-flex justify-content-center mt-5">
                      <div class="col-md-4 text-right">
                        <h2 style="font-size: 100px; font-weight: bold;">Genetic</h2>
                        <h2 style="font-size: 100px; font-weight: bold;  margin-top: -45px;">Resource</h2>
                        <h2 style="font-size: 100px; font-weight: bold;  margin-top: -40px;">Division</h2>
                      </div>
                      <div class="col-md-4 text-left mt-5">
                        <p class="f-16">The <strong>Genetic Resources Division (GRD)</strong> houses the PhilRice Genebank. PhilRice Genebank safeguards huge and diverse rice germplasm, which is critical in achieving Philippine Development Plan to reduce poverty, improved food and nutrition security.</p>
                        <a href="<?php echo base_url(); ?>main/about_us" class="btn btn-success rounded-pill text-center btn-green-bg" role="button" aria-disabled="true">&emsp;Learn More ...&emsp;</a>
                      </div>
                    </div>
                    <!-- <div class="card rounded-3 text-black mt-4">
                        <div class="row g-0">
                            <div class="col-12 gradient-custom-2">
                                <div class="px-3 py-4 p-md-6 mx-md-4">
                                    <h4 class="mb-3">Welcome to GeneLytics Portal</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Image before Footer -->
        <div class="text-white mt-5" id="gnltx-main-grd">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 d-flex justify-content-center text-white text-center" style="margin-top: 165px;">
                <h1 class="f-40" style="font-weight: 900;">Genetic resources are a global heritage.</h1><br>
              </div>

              <div class="col-md-12 d-flex justify-content-center text-white text-center mt-2">
                <p class="f-18">This are essential for sustainable development of human life.<br>
                All efforts are needed to conserve genetic resources for future generations.</p>
              </div>

              <div class="col-md-12 text-center d-flex justify-content-center mt-2">
                <div class="col-md-2 text-center">
                  <a href="<?php echo base_url(); ?>main/contact_us" class="btn btn-outline-light rounded-pill text-center btn-transparent-bg f-24" role="button" aria-disabled="true">&emsp;&emsp;Contact Us&emsp;&emsp;</a>
                </div>
                <div class="col-md-2 text-center">
                  <a href="<?php echo base_url(); ?>main/policy" class="btn btn-outline-light rounded-pill text-center btn-transparent-bg f-24" role="button" aria-disabled="true">&emsp;&emsp;View Policy&emsp;&emsp;</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ------------------------------------------- MODALS ----------------------------------------------------- -->

        <!-- Loading Login Successfully -->
        <div class="modal fade" tabindex="-1" role="dialog" id="loadingLoginSuccessModal">
          <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="col-md-12 d-flex justify-content-center text-center">
              <span style="font-size: 20px; color: #FFFFFF;">Successfully Logged In, Please Wait ...<br><br>
                <i class="fa fa-refresh fa-spin fa-3x w-100" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>

        <!-- Error Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
              <div class="modal-header text-white" style="background-color: red">
                <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error</span>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p id="errorPtag"></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Create Account Modal -->
        <div class="modal fade" id="createAccountModal" tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header" style="background-color: transparent">
                <h1 class="modal-title" id="exampleModalLabel"><b>Create Account</b></h1>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="create_account_form" method="">
                  <div class="form-row">
                      <div class="col-md-12 mb-2">
                          <label for="s_firstname">First name</label>
                          <input type="text" class="form-control" id="ca_firstname" name="ca_firstName" placeholder="" required>
                          <span id="ca_firstname-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer02">Middle name</label>
                          <input type="text" class="form-control" id="ca_middlename" name="ca_middleName" placeholder="" required>
                          <span id="ca_middlename-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer03">Last name</label>
                          <input type="text" class="form-control" id="ca_lastname" name="ca_lastName" placeholder="" required>
                          <span id="ca_lastname-error"></span>
                      </div>
                      <div class="col-md-6 mb-2">
                          <label for="validationServer04">Age</label>
                          <input type="number" class="form-control" id="ca_age" name="ca_age" placeholder="" required>
                          <span id="ca_age-error"></span>
                      </div>
                      <div class="col-md-6 mb-2">
                          <label for="validationServer05">Sex</label>
                          <select id="ca_sex" name="ca_sex" class="border rounded form-control text-left search-input small" data-live-search="true" data-width="100%">
                            <option value="">Select Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                          </select>
                          <span id="ca_sex-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Country</label>
                          
                          <select id="ca_country" name="ca_country" class="border form-control text-left search-input small" aria-label=".form-select-sm example" data-live-search="true">
                            <option value="">Select Country</option>                                     
                            <option value="Philippines (PHL)">Philippines (PHL)</option>
                                                      
                            <!-- <option value="">Select Country</option>
                            <?php if (count($countries) > 0){ ?>
                                <?php foreach ($countries as $country){ ?>
                                    <option value="<?php echo $country['country']; ?>"><?php echo $country['country']; ?></option>
                                <?php } ?>
                            <?php } else { ?>
                                <option value="">Select Country</option>
                            <?php } ?> -->
                          </select>
                          
                          <span id="ca_country-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Region</label>
                          <select id="ca_region" name="ca_region" class="border form-control text-left search-input small" data-live-search="true" data-width="100%" disabled>
                            <?php foreach ($regions as $region){ ?>
                                <option value="<?php echo $region['region']; ?>"><?php echo $region['region']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="ca_region-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Province</label>
                          <select id="ca_province" name="ca_province" class="border form-control text-left search-input small" data-live-search="true" data-width="100%" disabled>
                            <?php foreach ($provinces as $province){ ?>
                                <option value="<?php echo $province['province']; ?>"><?php echo $province['province']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="ca_province-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Municipality</label>
                          <select id="ca_municipality" name="ca_municipality" class="border form-control text-left search-input small" data-live-search="true" data-width="100%" disabled>
                            <?php foreach ($municipalities as $municipality){ ?>
                                <option value="<?php echo $municipality['municipality']; ?>"><?php echo $province['province']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="ca_municipality-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Address (House No./Block/District/Zone/Barangay)</label>
                          <input type="text" class="form-control" id="ca_address" name="ca_address" placeholder="" required>
                          <span id="ca_address-error"></span>
                      </div>
                      <div class="col-md-8 mb-2">
                          <label for="validationServer07">Email Address</label>
                          <input type="email" class="form-control" id="ca_email" name="ca_email" placeholder="" required>
                          <span id="ca_email-error"></span>
                      </div>
                      <div class="col-md-4 mb-2">
                          <label for="validationServer08">Contact No.</label>
                          <input type="number" class="form-control" id="ca_contact" name="ca_contact" placeholder=""  required>
                          <span id="ca_contact-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Company/Organization</label>
                          <input type="text" class="form-control" id="ca_comporg" name="ca_comporg" placeholder="" required>
                          <span id="ca_comporg-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer09">Password</label>
                          <input type="password" class="form-control" id="ca_password" name="ca_password" placeholder="" required>
                          <i class="fa fa-eye-slash" aria-hidden="true" id="show-ca_password" style="cursor: pointer; position: absolute; top: 62%; right: 5%; color: gray;"></i>
                          <span id="ca_password-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer10">Confirm Password</label>
                          <input type="password" class="form-control" id="ca_passconf" name="ca_passconf" placeholder="" required>
                          <i class="fa fa-eye-slash" aria-hidden="true" id="show-ca_passconf" style="cursor: pointer; position: absolute; top: 62%; right: 5%; color: gray;"></i>
                          <span id="ca_password-conf-error"></span>
                      </div>
                      <div class="col-md-12 text-center">
                          <span id="create-account-wait"></span>
                      </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer text-center">
                <button type="button" class="btn btn-outline-success rounded-pill" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button type="button" class="btn btn-success rounded-pill" id="submitCreateAccountBtn">Create Account</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Signup Modal -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header" style="background-color: transparent">
                <h1 class="modal-title" id="exampleModalLabel"><b>Sign up</b></h1>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="signup_form" method="">
                  <div class="form-row">
                      <div class="col-md-12 mb-2">
                          <label for="s_firstname">First name</label>
                          <input type="text" class="form-control" id="s_firstname" name="s_firstName" placeholder="" required>
                          <span id="firstname-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer02">Middle name</label>
                          <input type="text" class="form-control" id="s_middlename" name="middleName" placeholder="" required>
                          <span id="middlename-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer03">Last name</label>
                          <input type="text" class="form-control" id="s_lastname" name="lastName" placeholder="" required>
                          <span id="lastname-error"></span>
                      </div>
                      <div class="col-md-6 mb-2">
                          <label for="validationServer04">Age</label>
                          <input type="number" class="form-control" id="s_age" name="age" placeholder="" required>
                          <span id="age-error"></span>
                      </div>
                      <div class="col-md-6 mb-2">
                          <label for="validationServer05">Sex</label>
                          <select id="s_sex" name="s_sex" class="border rounded form-control text-left search-input small" data-live-search="true" data-width="100%">
                            <option value="">Select Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                          </select>
                          <span id="sex-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Country</label>
                          
                          <select id="s_country" name="s_country" class="border form-control text-left search-input small" aria-label=".form-select-sm example" data-live-search="true">
                            <option value="">Select Country</option>                                     
                            <option value="Philippines (PHL)">Philippines (PHL)</option>
                                                      
                            <!-- <option value="">Select Country</option>
                            <?php if (count($countries) > 0){ ?>
                                <?php foreach ($countries as $country){ ?>
                                    <option value="<?php echo $country['country']; ?>"><?php echo $country['country']; ?></option>
                                <?php } ?>
                            <?php } else { ?>
                                <option value="">Select Country</option>
                            <?php } ?> -->
                          </select>
                          
                          <span id="country-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Region</label>
                          <select id="s_region" name="s_region" class="border form-control text-left search-input small" data-live-search="true" data-width="100%" disabled>
                            <?php foreach ($regions as $region){ ?>
                                <option value="<?php echo $region['region']; ?>"><?php echo $region['region']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="region-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Province</label>
                          <select id="s_province" name="s_province" class="border form-control text-left search-input small" data-live-search="true" data-width="100%" disabled>
                            <?php foreach ($provinces as $province){ ?>
                                <option value="<?php echo $province['province']; ?>"><?php echo $province['province']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="province-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Municipality</label>
                          <select id="s_municipality" name="s_municipality" class="border form-control text-left search-input small" data-live-search="true" data-width="100%" disabled>
                            <?php foreach ($municipalities as $municipality){ ?>
                                <option value="<?php echo $municipality['municipality']; ?>"><?php echo $province['province']; ?></option>
                            <?php } ?>
                          </select>
                          <span id="municipality-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Address (House No./Block/District/Zone/Barangay)</label>
                          <input type="text" class="form-control" id="s_address" name="s_address" placeholder="" required>
                          <span id="address-error"></span>
                      </div>
                      <div class="col-md-8 mb-2">
                          <label for="validationServer07">Email Address</label>
                          <input type="email" class="form-control" id="s_email" name="s_email" placeholder="" required>
                          <span id="email-error"></span>
                      </div>
                      <div class="col-md-4 mb-2">
                          <label for="validationServer08">Contact No.</label>
                          <input type="number" class="form-control" id="s_contact" name="s_contact" placeholder=""  required>
                          <span id="contact-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Company/Organization</label>
                          <input type="text" class="form-control" id="s_comporg" name="s_comporg" placeholder="" required>
                          <span id="comporg-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer09">Password</label>
                          <input type="password" class="form-control" id="s_password" name="s_password" placeholder="" required>
                          <i class="fa fa-eye-slash" aria-hidden="true" id="show-s_password" style="cursor: pointer; position: absolute; top: 62%; right: 5%; color: gray;"></i>
                          <span id="password-error"></span>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer10">Confirm Password</label>
                          <input type="password" class="form-control" id="s_passconf" name="s_passconf" placeholder="" required>
                          <i class="fa fa-eye-slash" aria-hidden="true" id="show-s_passconf" style="cursor: pointer; position: absolute; top: 62%; right: 5%; color: gray;"></i>
                          <span id="password-conf-error"></span>
                      </div>
                      <div class="col-md-12 text-center">
                          <span id="signup-wait"></span>
                      </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer text-center">
                <button type="button" class="btn btn-outline-success rounded-pill" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button type="button" class="btn btn-success rounded-pill" id="signupBtn">Create Account</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Success Signup Study Modal -->
        <div class="modal fade" id="successSignupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                  <div class="modal-header text-white" style="background-color: green">
                      <span><i class="fa fa-spinner" aria-hidden="true"></i> Success!</span>
                  </div>
                  <div class="modal-body">
                    <p>
                        Successfully Signup.<br>
                        Please check your email inbox to verify email address.
                    </p>
                  </div>
                </div>
            </div>
        </div>

        <!-- Forgot Password Modal -->
        <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color: transparent">
                <h2 class="modal-title" id="exampleModalLabel"><b>Update Password</b></h2>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="reset_password_form" method="">
                  <div class="form-row">
                    <div class="col-md-12 mb-2">
                        <label for="validationServer07"><b>Email Address</b></label>
                        <input type="email" class="form-control" id="fp_email" name="fp_email" placeholder="" required>
                        <span id="fp_email-error"></span>  
                    </div>
                    <!-- <div class="col-md-12 mb-2">
                        <label for="validationServer09"><b>New Password</b></label>
                        <input type="password" class="form-control" id="fp_password" name="fp_password" placeholder="" required>
                        <span id="fp_password-error"></span>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="validationServer10"><b>Confirm New Password</b></label>
                        <input type="password" class="form-control" id="fp_passconf" name="fp_passconf" placeholder="" required>
                        <span id="fp_password-conf-error"></span>
                    </div> -->
                  </div>
                </form>
              </div>
              <div class="modal-footer text-center">
                <button type="button" class="btn btn-outline-success rounded-pill" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button type="button" class="btn btn-success rounded-pill" id="submitResetPasswordBtn">Send Reset Link</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Success Update Password Modal -->
        <div class="modal fade" id="successResetPasswordModal" tabindex="-1" aria-labelledby="fpModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
              <div class="modal-header text-white" style="background-color: green">
                <span><i class="fa fa-spinner" aria-hidden="true"></i> Success!</span>
              </div>
              <div class="modal-body">
                <p> Successfully sent password reset link.<br>Please check your email inbox.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Profile Modal -->
        <div class="modal fade" id="editprofileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color: transparent">
                <h1 class="modal-title" id="exampleModalLabel"><b>Edit Account</b></h1>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="edit_profile_form" method="POST">
                  <div class="form-row">
                      <div class="col-md-12 mb-2">
                          <label for="validationServer01">First name</label>
                          <input type="text" class="form-control" id="edit_firstname" name="editfirstName" placeholder="First name" <?php if (isset($first_name)) { echo "value='$first_name'"; } ?> required="">
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer02">Middle name</label>
                          <input type="text" class="form-control" id="edit_middlename" name="editmiddleName" placeholder="Middle name" <?php if (isset($middle_name)) { echo "value='$middle_name'"; } ?>>
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer03">Last name</label>
                          <input type="text" class="form-control" id="edit_lastname" name="editlastName" placeholder="Last name" <?php if (isset($last_name)) { echo "value='$last_name'"; } ?> required="">
                      </div>
                      <div class="col-md-6 mb-2">
                          <label for="validationServer04">Age</label>
                          <input type="number" class="form-control" id="edit_age" name="editage" placeholder="Age" <?php if (isset($age)) { echo "value='$age'"; } ?> required="">
                      </div>
                      <div class="col-md-6 mb-2">
                          <label for="validationServer05">Sex</label>
                          <input type="text" class="form-control" id="edit_sex" name="editsex" placeholder="Sex" <?php if (isset($sex)) { echo "value='$sex'"; } ?> required="">
                      </div>
                      <div class="col-md-12 mb-2">
                          <label for="validationServer06">Address</label>
                          <input type="text" class="form-control" id="edit_address" name="editaddress" placeholder="Address" <?php if (isset($address)) { echo "value='$address'"; } ?> required="">
                      </div>
                      <div class="col-md-7 mb-2">
                          <label for="validationServer07">Email Address</label>
                          <input type="email" class="form-control" id="edit_email" name="editemail" placeholder="Email Address" <?php if (isset($email)) { echo "value='$email'"; } ?> required="">
                      </div>
                      <div class="col-md-5 mb-2">
                          <label for="validationServer08">Contact No.</label>
                          <input type="number" class="form-control" id="edit_contact" name="editcontact" placeholder="Contact No. " <?php if (isset($contact)) { echo "value='$contact'"; } ?>>
                      </div>
                      <span id="spanForIdEdit" hidden><?php if (isset($user_id)) { echo "$user_id"; } ?></span>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-success rounded-pill" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button type="button" class="btn btn-success rounded-pill" id="editProfileBtn">Save</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Success Edit Account Modal -->
        <div class="modal fade" id="successEditAccountModal" tabindex="-1" aria-labelledby="fpModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
              <div class="modal-header text-white" style="background-color: green">
                <span><i class="fa fa-spinner" aria-hidden="true"></i> Success!</span>
              </div>
              <div class="modal-body">
                <p> Successfully updated account. </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Signin Modal -->
        <div class="modal fade bd-example-modal" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                </div> -->
                <div class="modal-body">
                  <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h2 class="modal-title ml-3" id=""><b>Sign in to continue</b></h2>
                  <p class="ml-3" style="font-size: 14px;">Please enter your details below</p>
                  
                  <form id="" class="" method="">
                    <div class="form-row px-3">
                      <div class="col-md-4 mb-3">
                        <label for="title_of_study"><b>Email</b></label>
                      </div>
                      <div class="col-md-8 mb-3">
                        <input type="text" class="form-control" id="semail_modal" name="semail_modal" placeholder="Email" required="">
                      </div>

                      <div class="col-md-4 mb-3">
                        <label for="study_description"><b>Password</b></label>
                      </div>
                      <div class="col-md-8 mb-3">
                        <input type="password" class="form-control" id="spassword_modal" name="spassword_modal" placeholder="Password" required="">
                        <i class="fa fa-eye-slash" aria-hidden="true" id="show-password-modal" style="cursor: pointer; position: absolute; top: 28%; right: 5%; color: gray;"></i>
                      </div>

                      <div class="col-md-12 mb-3 text-left" style="margin-left: 45px;">
                        <input class="text-left" type="checkbox" value="lsRememberMe" id="rememberMe"><label style="font-size: 14px;" for="rememberMe">&nbsp;Remember me</label>
                        <a class="text-muted" href="#!" id="forgot_password" style="margin-left: 100px; font-size: 14px;">Forgot password?</a>
                      </div>

                      <div class="col-md-12 mb-3 text-center">
                        <button class="btn btn-success btn-sm btn-block gradient-custom-2 rounded-pill" type="button" id="submitSignInBtn">Sign in</button>
                      </div>

                      <div class="col-md-12 mb-3 text-center">
                        <span class="">Don't have an account?</span>
                        <a class="text-muted" href="#" id="signup" style="color: #000000 !important;"><b>&nbsp;Sign up for free</b></a>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <!-- Footer -->
    <?php echo $footer; ?>

    <script>
        $(document).ready(function(){

          $('#ca_country').change(function(){
              var ca_country = $('#ca_country').val();
              $('#ca_region').empty();
              $('#ca_province').empty();
              $('#ca_municipality').empty();

              // alert(country);
              if(ca_country != ''){
                  $.ajax({
                      url: "<?php echo base_url(); ?>main/fetch_region",
                      method: "POST",
                      dataType: 'json',
                      data:{country: ca_country},
                      success:function(data){
                          // alert('Success!');
                          //console.log(data.regions);
                          
                          $('#ca_region').html('<option value="">Select Region</option>');

                          $.each(data.regions, function (i, item) {
                              $('#ca_region').append(
                                  $("<option></option>").attr(
                                      "value", item.region).text(item.region))
                          });

                          // $('#ca_province').html('<option value="">Select Province</option>');
                          // $('#ca_municipality').html('<option value="">Select Municipality</option>');

                          $('#ca_region').prop( "disabled", false );
                          // $('#ca_province').prop( "disabled", false );
                          // $('#ca_municipality').prop( "disabled", false );
                      },
                      error: function (request, status, error) {
                          alert(request.responseText);
                      }
                  });
              } else {
                  $('#ca_region').html('<option value="">Select Region</option>');
              }
          });

          $('#ca_region').change(function(){
                var ca_region = $('#ca_region').val();
                $('#ca_province').empty();
                $('#ca_municipality').empty();

                // alert(region);
                if(ca_region != ''){
                    $.ajax({
                        url: "<?php echo base_url(); ?>main/fetch_province",
                        method: "POST",
                        dataType: 'json',
                        data:{
                            region: ca_region
                        },
                        success:function(data){
                          //console.log(data.provinces);

                          $('#ca_province').html('<option value="">Select Province</option>');

                          $.each(data.provinces, function (i, item) {          
                              $('#ca_province').append(
                                  $("<option></option>").attr(
                                      "value", item.province).text(item.province))
                          });

                          // $('#ca_municipality').html('<option value="">Select Municipality</option>');

                          $('#ca_region').prop( "disabled", false );
                          $('#ca_province').prop( "disabled", false );
                          // $('#ca_municipality').prop( "disabled", false );
                        },
                        error: function (request, status, error) {
                            alert(request.responseText);
                        }
                    });
                } else {
                  $('#ca_province').html('<option value="">Select Province</option>');
                }
            });

            $('#ca_province').change(function(){
                var ca_province = $('#ca_province').val();
                $('#ca_municipality').empty();

                // alert(region);
                if(ca_province != ''){
                    $.ajax({
                        url: "<?php echo base_url(); ?>main/fetch_municipality",
                        method: "POST",
                        dataType: 'json',
                        data:{
                            province: ca_province
                        },
                        success:function(data){
                          //console.log(data.municipalities);

                          $('#ca_municipality').html('<option value="">Select Municipality</option>');

                          $.each(data.municipalities, function (i, item) {          
                              $('#ca_municipality').append(
                                  $("<option></option>").attr(
                                      "value", item.town).text(item.town))
                          });

                          $('#ca_region').prop( "disabled", false );
                          $('#ca_province').prop( "disabled", false );
                          $('#ca_municipality').prop( "disabled", false );
                        },
                        error: function (request, status, error) {
                            alert(request.responseText);
                        }
                    });
                } else {
                  $('#ca_municipality').html('<option value="">Select Municipality</option>');
                }
            });

            /// SIGN UP ///
            $('#s_country').change(function(){
              var s_country = $('#s_country').val();
              $('#s_region').empty();
              $('#s_province').empty();
              $('#s_municipality').empty();

              // alert(country);
              if(s_country != ''){
                  $.ajax({
                      url: "<?php echo base_url(); ?>main/fetch_region",
                      method: "POST",
                      dataType: 'json',
                      data:{country: s_country},
                      success:function(data){
                          // alert('Success!');
                          //console.log(data.regions);
                          
                          $('#s_region').html('<option value="">Select Region</option>');

                          $.each(data.regions, function (i, item) {
                              $('#s_region').append(
                                  $("<option></option>").attr(
                                      "value", item.region).text(item.region))
                          });

                          // $('#s_province').html('<option value="">Select Province</option>');
                          // $('#s_municipality').html('<option value="">Select Municipality</option>');

                          $('#s_region').prop( "disabled", false );
                      },
                      error: function (request, status, error) {
                          alert(request.responseText);
                      }
                  });
              } else {
                  $('#s_region').html('<option value="">Select Region</option>');
              }
          });

          $('#s_region').change(function(){
                var s_region = $('#s_region').val();
                $('#s_province').empty();
                $('#s_municipality').empty();

                // alert(region);
                if(s_region != ''){
                    $.ajax({
                        url: "<?php echo base_url(); ?>main/fetch_province",
                        method: "POST",
                        dataType: 'json',
                        data:{
                            region: s_region
                        },
                        success:function(data){
                          //console.log(data.provinces);

                          $('#s_province').html('<option value="">Select Province</option>');

                          $.each(data.provinces, function (i, item) {          
                              $('#s_province').append(
                                  $("<option></option>").attr(
                                      "value", item.province).text(item.province))
                          });

                          // $('#s_municipality').html('<option value="">Select Municipality</option>');

                          $('#s_region').prop( "disabled", false );
                          $('#s_province').prop( "disabled", false );
                        },
                        error: function (request, status, error) {
                            alert(request.responseText);
                        }
                    });
                } else {
                  $('#s_province').html('<option value="">Select Province</option>');
                }
            });

            $('#s_province').change(function(){
                var s_province = $('#s_province').val();
                $('#s_municipality').empty();

                // alert(region);
                if(s_province != ''){
                    $.ajax({
                        url: "<?php echo base_url(); ?>main/fetch_municipality",
                        method: "POST",
                        dataType: 'json',
                        data:{
                            province: s_province
                        },
                        success:function(data){
                          //console.log(data.municipalities);

                          $('#s_municipality').html('<option value="">Select Municipality</option>');

                          $.each(data.municipalities, function (i, item) {          
                              $('#s_municipality').append(
                                  $("<option></option>").attr(
                                      "value", item.town).text(item.town))
                          });

                          $('#s_region').prop( "disabled", false );
                          $('#s_province').prop( "disabled", false );
                          $('#s_municipality').prop( "disabled", false );
                        },
                        error: function (request, status, error) {
                            alert(request.responseText);
                        }
                    });
                } else {
                  $('#s_municipality').html('<option value="">Select Municipality</option>');
                }
            });

          // SHOW PASSWORD SIGN IN MODAL 
          const showPasswordModal = document.querySelector('#show-password-modal');
          const passwordModal = document.querySelector('#spassword_modal');

          showPasswordModal.addEventListener('click', function (e) {
            // toggle the type attribute
            const typeModal = passwordModal.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordModal.setAttribute('type', typeModal);
            
            // toggle the eye / eye slash icon
            const pwClassModal = this.getAttribute('class') === 'fa fa-eye-slash' ? 'fa fa-eye' : 'fa fa-eye-slash';
            this.className = pwClassModal;
          });

          // SHOW PASSWORD CREATE ACCOUNT MODAL
          const showCaPassword = document.querySelector('#show-ca_password');
          const caPassword = document.querySelector('#ca_password');
          const showCaPassconf = document.querySelector('#show-ca_passconf');
          const caPassconf = document.querySelector('#ca_passconf');

          showCaPassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const typeCaPw = caPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            caPassword.setAttribute('type', typeCaPw);
            
            // toggle the eye / eye slash icon
            const caPwClass = this.getAttribute('class') === 'fa fa-eye-slash' ? 'fa fa-eye' : 'fa fa-eye-slash';
            this.className = caPwClass;
          });

          showCaPassconf.addEventListener('click', function (e) {
            // toggle the type attribute
            const typeCaPc = caPassconf.getAttribute('type') === 'password' ? 'text' : 'password';
            caPassconf.setAttribute('type', typeCaPc);
            
            // toggle the eye / eye slash icon
            const caPwClass = this.getAttribute('class') === 'fa fa-eye-slash' ? 'fa fa-eye' : 'fa fa-eye-slash';
            this.className = caPwClass;
          });

          // SHOW PASSWORD SIGN UP MODAL
          const showSPassword = document.querySelector('#show-s_password');
          const sPassword = document.querySelector('#s_password');
          const showSPassconf = document.querySelector('#show-s_passconf');
          const sPassconf = document.querySelector('#s_passconf');

          showSPassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const typeSPw = sPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            sPassword.setAttribute('type', typeSPw);
            
            // toggle the eye / eye slash icon
            const sPwClass = this.getAttribute('class') === 'fa fa-eye-slash' ? 'fa fa-eye' : 'fa fa-eye-slash';
            this.className = sPwClass;
          });

          showSPassconf.addEventListener('click', function (e) {
            // toggle the type attribute
            const typeSPc = sPassconf.getAttribute('type') === 'password' ? 'text' : 'password';
            sPassconf.setAttribute('type', typeSPc);
            
            // toggle the eye / eye slash icon
            const sPwClass = this.getAttribute('class') === 'fa fa-eye-slash' ? 'fa fa-eye' : 'fa fa-eye-slash';
            this.className = sPwClass;
          });

          // CREATE ACCOUNT
          $("#createAccountBtn").click(function(){
            $('#createAccountModal').modal('show');

            var email = $('#create_account_email').val();

            document.getElementById("ca_email").value = email;
          });

          $("#submitCreateAccountBtn").click(function(){
            var flag = 0;
            var ca_firstname = $('#ca_firstname').val();
            var ca_middlename = $('#ca_middlename').val();
            var ca_lastname = $('#ca_lastname').val();
            var ca_age = $('#ca_age').val();
            var ca_sex = $('#ca_sex').val();
            var ca_address = $('#ca_address').val();
            var ca_email = $('#ca_email').val();
            var ca_contact = $('#ca_contact').val();
            var ca_password = $('#ca_password').val();
            var ca_passconf = $('#ca_passconf').val();

            //alert(ca_country);
            
            if (ca_firstname == '' || ca_firstname == undefined) {
              $('#ca_firstname').css('border', '1px solid red');
              document.getElementById("ca_firstname-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_firstname').css('border', '');
              document.getElementById("ca_firstname-error").innerHTML = '';
            }

            if (ca_middlename == '' || ca_middlename == undefined) {
              $('#ca_middlename').css('border', '1px solid red');
              document.getElementById("ca_middlename-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_middlename').css('border', '');
              document.getElementById("ca_middlename-error").innerHTML = '';
            }

            if (ca_lastname == '' || ca_lastname == undefined) {
              $('#ca_lastname').css('border', '1px solid red');
              document.getElementById("ca_lastname-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_lastname').css('border', '');
              document.getElementById("ca_lastname-error").innerHTML = '';
            }

            if (ca_age == '' || ca_age == undefined) {
              $('#ca_age').css('border', '1px solid red');
              document.getElementById("ca_age-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_age').css('border', '');
              document.getElementById("ca_age-error").innerHTML = '';
            }

            if (ca_sex == '' || ca_sex == undefined) {
              $('#ca_sex').css('border', '1px solid red');
              document.getElementById("ca_sex-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_sex').css('border', '');
              document.getElementById("ca_sex-error").innerHTML = '';
            }

            // // FOR COMMENT OUT
            // if (ca_country == '' || ca_country == undefined) {
            //   $('#ca_country').css('border', '1px solid red');
            //   document.getElementById("ca_country-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            //   flag = 1;
            // } else {
            //   $('#ca_country').css('border', '');
            //   document.getElementById("ca_country-error").innerHTML = '';
            // }

            // if (ca_region == '' || ca_region == undefined) {
            //   $('#ca_region').css('border', '1px solid red');
            //   document.getElementById("ca_region-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            //   flag = 1;
            // } else {
            //   $('#ca_region').css('border', '');
            //   document.getElementById("ca_region-error").innerHTML = '';
            // }

            // if (ca_province == '' || ca_province == undefined) {
            //   $('#ca_province').css('border', '1px solid red');
            //   document.getElementById("ca_province-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            //   flag = 1;
            // } else {
            //   $('#ca_province').css('border', '');
            //   document.getElementById("ca_province-error").innerHTML = '';
            // }

            // if (ca_municipality == '' || ca_municipality == undefined) {
            //   $('#ca_municipality').css('border', '1px solid red');
            //   document.getElementById("ca_municipality-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            //   flag = 1;
            // } else {
            //   $('#ca_municipality').css('border', '');
            //   document.getElementById("ca_municipality-error").innerHTML = '';
            // }

            // if (ca_comporg == '' || ca_comporg == undefined) {
            //   $('#ca_comporg').css('border', '1px solid red');
            //   document.getElementById("ca_comporg-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            //   flag = 1;
            // } else {
            //   $('#ca_comporg').css('border', '');
            //   document.getElementById("ca_comporg-error").innerHTML = '';
            // }

            if (ca_address == '' || ca_address == undefined) {
              $('#ca_address').css('border', '1px solid red');
              document.getElementById("ca_address-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_address').css('border', '');
              document.getElementById("ca_address-error").innerHTML = '';
            }

            if (ca_email == '' || ca_email == undefined) {
              $('#ca_email').css('border', '1px solid red');
              document.getElementById("ca_email-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              var ca_emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

              if (!ca_emailRegex.test(ca_email)) {
                $('#ca_email').css('border', '1px solid red');
                document.getElementById("ca_email-error").innerHTML = "<span style='color: red;'><strong>Invalid email address.</strong></span>";
                flag = 1;
              } else {
                $('#ca_email').css('border', '');
                document.getElementById("ca_email-error").innerHTML = '';
              }
            }

            if (ca_contact == '' || ca_contact == undefined) {
              $('#ca_contact').css('border', '1px solid red');
              document.getElementById("ca_contact-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_contact').css('border', '');
              document.getElementById("ca_contact-error").innerHTML = '';
            }
            
            if (ca_password == '' || ca_password == undefined) {
              $('#ca_password').css('border', '1px solid red');
              // document.getElementById("ca_password-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              $('#ca_password').css('border', '');
              document.getElementById("ca_password-error").innerHTML = '';
            }

            if (ca_passconf == '' || ca_passconf == undefined) {
              $('#ca_passconf').css('border', '1px solid red');
              // document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
              flag = 1;
            } else {
              if (ca_passconf != ca_password) {
                $('#s_passconf').css('border', '1px solid red');
                document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Password and Passconf do not match!</strong></span>";
                flag = 1;
              } else {
                if (ca_password.length < 8) {
                  $('#ca_password').css('border', '1px solid red');
                  $('#ca_passconf').css('border', '1px solid red');
                  document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must be at least 8 characters long.</strong></span>";
                  flag = 1;
                // } else if (!/\d/.test(ca_password)) {
                //   $('#ca_password').css('border', '1px solid red');
                //   $('#ca_passconf').css('border', '1px solid red');
                //   document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one digit.</strong></span>";
                //   flag = 1;
                // } else if (!/[a-z]/.test(ca_password)) {
                //   $('#ca_password').css('border', '1px solid red');
                //   $('#ca_passconf').css('border', '1px solid red');
                //   document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one lowercase letter.</strong></span>";
                //   flag = 1;
                // } else if (!/[A-Z]/.test(ca_password)) {
                //   $('#ca_password').css('border', '1px solid red');
                //   $('#ca_passconf').css('border', '1px solid red');
                //   document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one uppercase letter.</strong></span>";
                //   flag = 1;
                // } else if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(ca_password)) {
                //   $('#ca_password').css('border', '1px solid red');
                //   $('#ca_passconf').css('border', '1px solid red');
                //   document.getElementById("ca_password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one special character.</strong></span>";
                //   flag = 1;
                } else {
                  $('#ca_passconf').css('border', '');
                  document.getElementById("ca_password-conf-error").innerHTML = '';
                }
              }
            }

            if (flag == 0){
              document.getElementById("create-account-wait").innerHTML = '<span style="color: green;" class="mb-2 mt-3"><strong>Registering account, Please wait ...</strong></span>' +
                                                                         '<div class="spinner-border text-success ml-1" role="status">' +
                                                                            '<span class="sr-only">Loading...</span>' +
                                                                          '</div>';

              $.ajax({
                url: "<?php echo base_url(); ?>main/signup",
                method: 'POST',
                dataType: "JSON",
                data: {
                  firstname: ca_firstname,
                  middlename: ca_middlename,
                  lastname: ca_lastname,
                  age: ca_age,
                  sex: ca_sex,
                  address: ca_address,
                  email: ca_email,
                  contact: ca_contact,
                  password: ca_password,
                  passconf: ca_passconf,
                  country: ca_country,
                  region: ca_region,
                  province: ca_province,
                  municipality: ca_municipality,
                  comporg: ca_comporg
                },
                success: function(response) {
                  if (response == "Successfully send email verification."){
                    $('#createAccountModal').modal('toggle');
                    
                    $('#successSignupModal').modal('show');
                    setTimeout(function() {
                        window.location.reload();
                    }, 3500);
                  } else {
                    document.getElementById("create-account-wait").innerHTML = "";
                    $('#ca_email').css('border', '1px solid red');
                    document.getElementById("ca_email-error").innerHTML = "<span style='color: red;'><strong>"+ response +"</strong></span>"; 
                  }
                },
                error: function (request, status, error) {
                  alert(request.responseText);
                }
              });
            }
          });

          // FORGOT PASSWORD
          $("#forgot_password").click(function(){
            $('#signinModal').modal('toggle');
            $('#forgotPasswordModal').modal('show');

            var email = $('#semail_modal').val();

            document.getElementById("fp_email").value = email;
          });

          // RESET PASSWORD
          $("#submitResetPasswordBtn").click(function(){
            var flag = 0;
            var fp_email = $('#fp_email').val();
            // var fp_password = $('#fp_password').val();
            // var fp_passconf = $('#fp_passconf').val();

            if (fp_email == '' || fp_email == undefined) {
              $('#fp_email').css('border', '1px solid red');
              document.getElementById("fp_email-error").innerHTML = "<span style='color: red;'><strong>Please fillout this field.</strong></span>";
              flag = 1;
            }
            
            // if (fp_password == '' || fp_password == undefined) {
            //   $('#fp_password').css('border', '1px solid red');
            //   document.getElementById("fp_password-error").innerHTML = "<span style='color: red;'><strong>Please fillout this field.</strong></span>";
            //   flag = 1;
            // } 

            // if (fp_passconf == '' || fp_passconf == undefined) {
            //   $('#fp_passconf').css('border', '1px solid red');
            //   document.getElementById("fp_password-conf-error").innerHTML = "<span style='color: red;'><strong>Please fillout this field.</strong></span>";
            //   flag = 1;
            // }

            // if (fp_passconf != fp_password) {
            //   $('#fp_passconf').css('border', '1px solid red');
            //   document.getElementById("fp_password-conf-error").innerHTML = "<span style='color: red;'><strong>Mismatched password!</strong></span>";
            //   flag = 1;
            // }

            if (flag == 0){
              $.ajax({
                url: "<?php echo base_url(); ?>main/send_password_reset_link",
                method: 'POST',
                dataType: "JSON",
                data: {
                  email: fp_email,
                  // password: fp_password,
                  // passconf: fp_passconf
                },
                success: function(response) {
                  //console.log(response);
                  if (response['message'] == 'Successfully sent reset password link.'){
                    $('#forgotPasswordModal').modal('toggle');
                    
                    $('#successResetPasswordModal').modal('show');
                    setTimeout(function() {
                      window.location.reload();
                    }, 4000);
                  } else {
                    document.getElementById("errorPtag").innerHTML = response['message'];
                    $('#errorModal').modal('show');
                    $('#forgotPasswordModal').modal('toggle');

                    setTimeout(function() {
                      window.location.reload();
                    }, 3500);
                  }
                },
                error: function (request, status, error) {
                  alert(request.responseText);
                }
              });
            }
          });

          // SIGNUP
          $("#signup").click(function(){
            $('#signinModal').modal('toggle');
            $('#signupModal').modal('show');
          });

        $("#signupBtn").click(function(){
          var flag = 0;
          var s_firstname = $('#s_firstname').val();
          var s_middlename = $('#s_middlename').val();
          var s_lastname = $('#s_lastname').val();
          var s_age = $('#s_age').val();
          var s_sex = $('#s_sex').val();
          var s_address = $('#s_address').val();
          var s_email = $('#s_email').val();
          var s_contact = $('#s_contact').val();
          var s_password = $('#s_password').val();
          var s_passconf = $('#s_passconf').val();
          var s_country = $('#s_country').val();
          var s_region = $('#s_region').val();
          var s_province = $('#s_province').val();
          var s_municipality = $('#s_municipality').val();
          var s_comporg = $('#s_comporg').val();

          if (s_firstname == '' || s_firstname == undefined) {
            $('#s_firstname').css('border', '1px solid red');
            document.getElementById("firstname-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_firstname').css('border', '');
            document.getElementById("firstname-error").innerHTML = '';
          }

          if (s_middlename == '' || s_middlename == undefined) {
            $('#s_middlename').css('border', '1px solid red');
            document.getElementById("middlename-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_middlename').css('border', '');
            document.getElementById("middlename-error").innerHTML = '';
          }

          if (s_lastname == '' || s_lastname == undefined) {
            $('#s_lastname').css('border', '1px solid red');
            document.getElementById("lastname-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_lastname').css('border', '');
            document.getElementById("lastname-error").innerHTML = '';
          }

          if (s_age == '' || s_age == undefined) {
            $('#s_age').css('border', '1px solid red');
            document.getElementById("age-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_age').css('border', '');
            document.getElementById("age-error").innerHTML = '';
          }

          if (s_sex == '' || s_sex == undefined) {
            $('#s_sex').css('border', '1px solid red');
            document.getElementById("sex-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_sex').css('border', '');
            document.getElementById("sex-error").innerHTML = '';
          }

          // // FOR COMMENT OUT
          // if (s_country == '' || s_country == undefined) {
          //   $('#s_country').css('border', '1px solid red');
          //   document.getElementById("country-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
          //   flag = 1;
          // } else {
          //   $('#s_country').css('border', '');
          //   document.getElementById("country-error").innerHTML = '';
          // }

          // if (s_region == '' || s_region == undefined) {
          //   $('#s_region').css('border', '1px solid red');
          //   document.getElementById("region-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
          //   flag = 1;
          // } else {
          //   $('#s_region').css('border', '');
          //   document.getElementById("region-error").innerHTML = '';
          // }

          // if (s_province == '' || s_province == undefined) {
          //   $('#s_province').css('border', '1px solid red');
          //   document.getElementById("province-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
          //   flag = 1;
          // } else {
          //   $('#s_province').css('border', '');
          //   document.getElementById("province-error").innerHTML = '';
          // }

          // if (s_municipality == '' || s_municipality == undefined) {
          //   $('#s_municipality').css('border', '1px solid red');
          //   document.getElementById("municipality-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
          //   flag = 1;
          // } else {
          //   $('#s_municipality').css('border', '');
          //   document.getElementById("municipality-error").innerHTML = '';
          // }

          // if (s_comporg == '' || s_comporg == undefined) {
          //   $('#s_comporg').css('border', '1px solid red');
          //   document.getElementById("comporg-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
          //   flag = 1;
          // } else {
          //   $('#s_comporg').css('border', '');
          //   document.getElementById("comporg-error").innerHTML = '';
          // }

          if (s_address == '' || s_address == undefined) {
            $('#s_address').css('border', '1px solid red');
            document.getElementById("address-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_address').css('border', '');
            document.getElementById("address-error").innerHTML = '';
          }

          if (s_email == '' || s_email == undefined) {
            $('#s_email').css('border', '1px solid red');
            document.getElementById("email-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(s_email)) {
              $('#s_email').css('border', '1px solid red');
              document.getElementById("email-error").innerHTML = "<span style='color: red;'><strong>Invalid email address.</strong></span>";
              flag = 1;
            } else {
              $('#s_email').css('border', '');
              document.getElementById("email-error").innerHTML = '';
            }
          }

          if (s_contact == '' || s_contact == undefined) {
            $('#s_contact').css('border', '1px solid red');
            document.getElementById("contact-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_contact').css('border', '');
            document.getElementById("contact-error").innerHTML = '';
          }
          
          if (s_password == '' || s_password == undefined) {
            $('#s_password').css('border', '1px solid red');
            // document.getElementById("password-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            $('#s_password').css('border', '');
            document.getElementById("password-error").innerHTML = '';
          }

          if (s_passconf == '' || s_passconf == undefined) {
            $('#s_passconf').css('border', '1px solid red');
            // document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Can't be blank!</strong></span>";
            flag = 1;
          } else {
            if (s_passconf != s_password) {
              $('#s_passconf').css('border', '1px solid red');
              document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Password and Passconf do not match!</strong></span>";
              flag = 1;
            } else {
              if (s_password.length < 8) {
                $('#s_password').css('border', '1px solid red');
                $('#s_passconf').css('border', '1px solid red');
                document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must be at least 8 characters long.</strong></span>";
                flag = 1;
              // } else if (!/\d/.test(s_password)) {
              //   $('#s_password').css('border', '1px solid red');
              //   $('#s_passconf').css('border', '1px solid red');
              //   document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one digit.</strong></span>";
              //   flag = 1;
              // } else if (!/[a-z]/.test(s_password)) {
              //   $('#s_password').css('border', '1px solid red');
              //   $('#s_passconf').css('border', '1px solid red');
              //   document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one lowercase letter.</strong></span>";
              //   flag = 1;
              // } else if (!/[A-Z]/.test(s_password)) {
              //   $('#s_password').css('border', '1px solid red');
              //   $('#s_passconf').css('border', '1px solid red');
              //   document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one uppercase letter.</strong></span>";
              //   flag = 1;
              // } else if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(s_password)) {
              //   $('#s_password').css('border', '1px solid red');
              //   $('#s_passconf').css('border', '1px solid red');
              //   document.getElementById("password-conf-error").innerHTML = "<span style='color: red;'><strong>Password must contain at least one special character.</strong></span>";
              //   flag = 1;
              } else {
                $('#s_passconf').css('border', '');
                document.getElementById("password-conf-error").innerHTML = '';
              }
            }
          }

          if (flag == 0){
            document.getElementById("signup-wait").innerHTML =  '<span style="color: green;" class="mb-2 mt-3"><strong>Registering account, Please wait ...</strong></span>' +
                                                                '<div class="spinner-border text-success ml-1" role="status">' +
                                                                    '<span class="sr-only">Loading...</span>' +
                                                                '</div>';

            $.ajax({
              url: "<?php echo base_url(); ?>main/signup",
              method: 'POST',
              dataType: "JSON",
              data: {
                firstname: s_firstname,
                middlename: s_middlename,
                lastname: s_lastname,
                age: s_age,
                sex: s_sex,
                address: s_address,
                email: s_email,
                contact: s_contact,
                password: s_password,
                passconf: s_passconf,
                country: s_country,
                region: s_region,
                province: s_province,
                municipality: s_municipality,
                comporg: s_comporg
              },
              success: function(response) {
                // //console.log(response);
                if (response == "Successfully send email verification."){
                  $('#signupModal').modal('toggle');
                  
                  $('#successSignupModal').modal('show');
                  setTimeout(function() {
                      window.location.reload();
                  }, 3500);
                } else {
                  document.getElementById("signup-wait").innerHTML = "";
                  $('#s_email').css('border', '1px solid red');
                  document.getElementById("email-error").innerHTML = "<span style='color: red;' class='mb-2 mt-3'><strong>"+ response +"</strong></span>"; 
                }
              },
              error: function (request, status, error) {
                  alert(request.responseText);
              }
            });
          }    
        });

        // Signin Modal
        $("#signIn").click(function(){
          $('#signinModal').modal('show');
        });

        // Press enter, trigger submit button
        $("#spassword_modal").keypress(function(event) {
              if (event.keyCode === 13) {
                  $("#submitSignInBtn").click();
              }
          });

        $("#submitSignInBtn").click(function(){
          var flag = 0;
          var email = $('#semail_modal').val();
          var password = $('#spassword_modal').val();

          if (email == '' || email == undefined) {
            $('#semail_modal').css('border', '1px solid red');
            flag = 1;
          }

          if (password == '' || password == undefined) {
            $('#spassword_modal').css('border', '1px solid red');
            flag = 1;
          }

          if (flag == 0) {
            $.ajax({
              url: "<?php echo base_url(); ?>main/login",
              method: 'POST',
              dataType: "JSON",
              data: {
                email: email, 
                password: password
              },
              success: function (result) {
                // //console.log(result);
                if (result['error'] == false){
                  // alert("Success!");
                  $('#signinModal').modal('toggle');
                  $('#loadingLoginSuccessModal').modal('show');

                  setTimeout(function() {
                    $('#loadingLoginSuccessModal').modal('hide');
                    window.location.href = '<?php echo base_url(); ?>main/index';
                  }, 3500);
                } else {
                  // //console.log(result);
                  // alert(result['message']);
                  document.getElementById("errorPtag").innerHTML = result['message'];
                  $('#errorModal').modal('show');
                  $('#signinModal').modal('toggle');

                  setTimeout(function() {
                    window.location.reload();
                  }, 3500);
                }
              }
            });
          } else {
            // alert('Something went wrong');
          }
        });
      });
    </script>

</body>  
</html>  