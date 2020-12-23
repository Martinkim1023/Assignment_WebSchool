<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p>Vui lòng đăng nhập để tiếp tục.</p>
            <form method="POST" id="formSignin" onsubmit="return false;">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" style=" width:58%;border-radius:0px;" placeholder="Tên đăng nhập" id="user_signin">
                    </div><!-- div.input-group -->
                </div><!-- div.form-group -->
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" class="form-control" style=" width:58%;border-radius:0px;" placeholder="Mật khẩu" id="pass_signin">
                    </div><!-- div.input-group -->
                </div><!-- div.form-group -->
                <div class="form-group">
                    <button type="submit"  style=" background-color: #193c5a;border-radius: 0px;" class="btn btn-primary" >Đăng nhập</button>
                </div><!-- div.form-group -->
                <div class="alert alert-danger hidden"></div>
            </form><!-- form#formSignin -->
        </div><!-- dib.col-md-6 -->
    </div><!-- div.row -->
</div><!-- div.container -->