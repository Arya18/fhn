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
                            <div class="col-xs-6">
                                <a href="#" class="<?php if(!isset($reg_active)){echo 'active';}?>" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link" class="<?php if(isset($reg_active)){echo $reg_active;}?>">Register</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                            <?php if($this->session->flashdata('reg_success')){?>
                            <p style="color:green;font-weight: 700;"><?php echo $this->session->flashdata('reg_success');?></p>
                            <?php }?>
                            <?php if($this->session->flashdata('login_error')){?>
                            <p style="color:red;font-weight: 700;"><?php echo $this->session->flashdata('login_error');?></p>
                            <?php }?>
                             <form id="login-form" action="<?php echo base_url('login/user_login');?>" method="post" role="form" style="<?php if(isset($reg_active)){echo 'display: none;';}else{ echo 'display: block;'; }?>">
                                    <div class="row"> 
                                        <div class="col-lg-12"> 
                                         <div class="form-group">
                                                <select class="form-control" name="login_type" required>
                                                    <option value="">Login As</option>
                                                    <option value="Doctor">Doctor</option>
                                                    <option value="User">User</option>
                                                </select>
                                                <?php if(form_error('login_type')){?>
                                            <?php echo form_error('login_type', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                            </div>


                                            <div class="form-group">
                                                <input type="text" class="form-control" id="user_name" placeholder="Enter your user_name" name="user_name" required>
                                                <?php if(form_error('user_name')){?>
                                            <?php echo form_error('user_name', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                                                <?php if(form_error('password')){?>
                                            <?php echo form_error('password', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                            </div>
                                            <div class="form-group text-center"> 
                                                <input type="checkbox" tabindex="3" class="" name="otpLogin" id="otpLogin"> <label for="OTP"> Login through OTP </label> 
                                            </div>
                                            <div class="text-center"><a href="index.php">
                                                 <input type="submit" name="user_login" class="btn btn-primary" value="Submit"></div>
                                                
                                            </div>
                                            <div class="row"> 
                                                <div class="col-lg-12"> 
                                                    <div class="text-center"> <a href="" tabindex="5" class="forgot-password">Forgot Password?</a> 
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </form> 
                                <form id="register-form" action="<?php echo base_url('login/user_registration'); ?>" method="post" role="form" style="<?php if(isset($reg_active)){ echo 'display: block;';}else{ echo 'display: none;';}?>">
                            <div class="row"> 
                                <div class="col-lg-12">
                                    <div class="text-center"> Are you a Doctor? <a href="<?php echo base_url('login/doc_registration'); ?>" tabindex="5" class="patient-register-link">Click here</a> 
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
                                            <input type="text" class="form-control" id="aadharcard" placeholder="Enter your aadhar card" name="aadhar" required>
                                            <?php if(form_error('aadhar')){?>
                                            <?php echo form_error('aadhar', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                        </div>


                                        <div class="form-group">
                                            <input type="date" class="form-control" id="dob" placeholder="" name="dob" required>
                                        </div>


                                        <div class="form-group">
                                            <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="password1" required >
                                            <?php if(form_error('password1')){?>
                                            <?php echo form_error('password1', '<div class="error" style="color:red;">', '</div>'); ?>
                                             <?php }?>
                                        </div>

                                        <div class="text-center">
                
                                            <input type="submit" name="user_registration" class="btn btn-primary" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </form>
                    </div> 
                    </div>
                </div>
                            </body>