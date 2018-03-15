<head>

    <?php $this->load->view('common/header');?>

    <?php $this->load->view('common/footer');?>

</head>

<body>
<div class="container form-container">
        <div class="row ">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3">
                                <a href="#" class="active" id="login-form-link">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">

                                <form id="doctor-register-form" action="<?php echo base_url('login/doc_registration'); ?>" method="post" role="form" style="display: block;">
                                <div class="row"> 
                                        <div class="col-lg-12">
                                    <div class="text-center"> Not a Doctor? <a href="<?php echo base_url('login')?>" tabindex="5" class="patient-register-link">Click here</a> 
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Enter your name" name="name" required>
                                            <?php if(form_error('name')){?>
                                            <?php echo form_error('name', '<div class="error"  style="color:red;">', '</div>'); ?>
                                            <?php }?>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                                            <?php if(form_error('email')){?>
                                            <?php echo form_error('email', '<div class="error"  style="color:red;">', '</div>'); ?>
                                            <?php }?>
                                        </div>
                                    <div class="form-group">
                                            <input type="tel" class="form-control" id="mobileno" placeholder="Enter Mobile no" name="mobile" required>
                                            <?php if(form_error('mobile')){?>
                                            <?php echo form_error('mobile', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="registration_no" placeholder="Enter Registration No" name="registration_no" required>
                                            <?php if(form_error('registration_no')){?>
                                            <?php echo form_error('registration_no', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                        </div>

                                           <div class="form-group">
                                            <input type="text" class="form-control" id="specialization" placeholder="Enter Specialization" name="specialization" required>
                                           
                                        </div>

                                        <div class="form-group">
                                            <input type="date" class="form-control" id="dob" placeholder="" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="password1" required>
                                            <?php if(form_error('password1')){?>
                                            <?php echo form_error('password1', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                        </div>
                                        <div class="text-center">
                
                                            <input type="submit" name="doc_registration" class="btn btn-primary" value="Submit"></div>
                                    </div>
                                </div>
                                </div>
                            </form>
                            </body>