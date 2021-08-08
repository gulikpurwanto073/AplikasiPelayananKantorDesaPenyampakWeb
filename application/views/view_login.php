<?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-warning" role="alert">
<?=$this->session->flashdata('message')?>
</div>
<?php } ?>
<form id="form1" name="form1" method="post" action="<?php echo site_url('home/ceklogin'); ?>" class="login-form">
    <div class="form-group">
        <input type="text" class="form-control rounded-left" name="username" id="username" placeholder="Username" required>
    </div>
    <div class="form-group d-flex">
        <input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password" required>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
    </div>
    <div class="form-group d-md-flex">
        <div class="w-50">
            <label class="checkbox-wrap checkbox-primary">Remember Me
                <input type="checkbox" checked>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="w-50 text-md-right">
            <a href="<?php echo site_url('home'); ?>">Kembali Ke Home</a>
        </div>
    </div>
</form>