<div class="col-6 p-5 Leftside">

                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-success mx-5">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('error')): ?>
                                <div class="alert alert-danger mx-5">
                                    <?php echo $this->session->flashdata('error'); ?>
                                </div>
                            <?php endif; ?>
                            <h3 class="fw-bold mx-5">Login</h3>
                            <h6 class="fw-normal mx-5 mt-3">Signin to start your session</h6>

                            <form action="<?php echo site_url('auth/login'); ?>" method="post" class="p-5 rounded-start-3">
                                <input type="text" name="email" placeholder="Username :"
                                    class="mb-5 py-2 w-100 border-0 rounded-3 Username">
                                <input type="password" name="password" placeholder="Password :"
                                    class="mb-5 py-2 w-100 border-0 rounded-3 Password">

                                <div class="row">
                                    <div class="col-6">
                                        <input type="submit" value="Sign in"
                                            class="px-5 border-0 text-center text-light fw-semibold fs-6 Button">
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="" class="text-decoration-none">Forget Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        