
$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

$(document)
            .ready(
                    function() {
                        console.log("validation loaded!")
                        $('#login-form')
                                .bootstrapValidator(
                                        {
                                            message : 'This value is not valid',
                                            feedbackIcons : {
                                            },
                                            fields : {
                                              email : {
                                                    message : 'The email is not valid',
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Email cannot be empty'
                                                        }
                                                    }
                                                },
                                                password : {
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Password cannot be empty'
                                                        },
                                                         regexp : {
                                                            regexp : /^[a-zA-Z0-9_]+$/,
                                                            message : 'Password can only consist of alphabetical, number and underscore'
                                                        }                                                        
                                                    }
                                                },
                                                userType : {
                                                  validators : {
                                                        notEmpty : {
                                                            message : 'Select user type is mandatory'
                                                        }                                                       
                                                    }
                                                }
                                            }
                                        });

                        $('#register-form')
                                .bootstrapValidator(
                                        {
                                            message : 'This value is not valid',
                                            feedbackIcons : {
                                            },
                                            fields : {
                                              name : {
                                                    message : 'The username is not valid',
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Username cannot be empty'
                                                        }
                                                    }
                                                },
                                                email : {
                                                    message : 'The email is not valid',
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Email cannot be empty'
                                                        }                                                      
                                                    }
                                                },
                                                aadhar: {
                                                  validators : {
                                                        notEmpty : {
                                                            message : 'Aadhar card number is mandatory'
                                                        },
                                                        stringLength : {
                                                            min : 12,
                                                            max : 12,
                                                            message : 'Aadhar should be of 12 digits.'
                                                        }                                                       
                                                    }
                                                },
                                                mobile : {
                                                  validators : {
                                                      notEmpty : {
                                                        message : 'Mobile number is mandatory'
                                                    },
                                                      stringLength : {
                                                                min : 10,
                                                                max : 10,
                                                                message : 'Mobile number should be of 10 digits.'
                                                      },
                                                      regexp : {
                                                        regexp : /^[0-9_\.]+$/,
                                                        message : 'Only numbers are allowed'
                                                      }
                                                  } 
                                                },
                                                dob : {
                                                  validators : {
                                                    notEmpty : 'DOB is mandatory'
                                                  }
                                                }
                                            }
                                        });
                          $('#doctor-register-form')
                                .bootstrapValidator(
                                        {
                                            message : 'This value is not valid',
                                            feedbackIcons : {
                                            },
                                            fields : {
                                              name : {
                                                    message : 'The username is not valid',
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Username cannot be empty'
                                                        }
                                                    }
                                                },
                                                email : {
                                                    message : 'The email is not valid',
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Email cannot be empty'
                                                        }                                                        
                                                    }
                                                },
                                                registration_no : {
                                                  validators : {
                                                        notEmpty : {
                                                            message : 'Registration number is mandatory'
                                                        }                                                      
                                                    }
                                                },
                                                specialization : {
                                                  validators : {
                                                    notEmpty : 'Specialization number is mandatory'
                                                  }
                                                },
                                                mobile : {
                                                  validators : {
                                                    notEmpty : {
                                                      message: 'Mobile number is mandatory'
                                                  },
                                                  stringLength : {
                                                            min : 10,
                                                            max : 10,
                                                            message : 'Mobile number should be of 10 digits.'
                                                  },
                                                  regexp : {
                                                    regexp : /^[0-9_\.]+$/,
                                                    message : 'Only numbers are allowed'
                                                  } 
                                                }
                                            },


                                             dob : {
                                                  validators : {
                                                    notEmpty : 'DOB is mandatory'
                                                  }
                                                },

                                                 password : {
                                                    validators : {
                                                        notEmpty : {
                                                            message : 'Password cannot be empty'
                                                        },
                                                         regexp : {
                                                            regexp : /^[a-zA-Z0-9_]+$/,
                                                            message : 'Password can only consist of alphabetical, number and underscore'
                                                        }                                                        
                                                    }
                                                },
                                          }
                                        });
                        
                    });