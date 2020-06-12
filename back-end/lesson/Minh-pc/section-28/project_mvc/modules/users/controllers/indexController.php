

<?php

function construct()
{
    // echo "Dùng chung, load đầu tiên";
    load_model('index');
    load('lib', 'validation');
    load('lib','email');
}

function regAction()
{
    global $error, $username, $password, $email, $fullname;
    if (isset($_POST['btn_reg'])) {
        $error = array();
        #Kiểm tra fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            $fullname = $_POST['fullname'];
        }

        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            if (is_email($_POST['email'])) {
                $email = $_POST['email'];
            }else{
                $error['email']="Email không đúng định dạng";
            }
        }

        #Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống username";
        } else {
            if (is_username($_POST['username'])) {
                $username = $_POST['username'];
            } else {
                $error['username'] = "Tên đăng nhập không hợp lệ";
            }
        }

        #kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống password";
        } else {
           if(!is_password($_POST['password'])){
               $error['password']="Không đúng định dạng password";
           }else{
               $password = md5($_POST['password']);
           }
        }


        #Kết luận
        if(empty($error)){
            if(!user_exists($username,$email)){
                //mã kích hoạt
              $active_token = md5($username.time());
              $data = array(
                'fullname'=>$fullname,
                'email'=>$email,
                'username'=>$username,
                'password'=>$password,
                'active_token'=>$active_token,
                'reg_date'=>time()
              ); 
            $link_active = base_url("?mod=users&action=active&active_token={$active_token}");
            $content = "<p>Chào bạn {$fullname}</p>
                        <p>Bạn vui lòng click vào đường link để kích hoạt tài khoản: <a href='{$link_active}'>HERE</a></p>
                        <p>Nếu không phải bạn đăng ký tài khoản hãy bỏ qua email này</p>
                        <p>Team support unitop.vn</p>";
            add_user($data);
            //Gửi email để xác thực tài khoản
            send_mail($data['email'],$data['fullname'],'Kích hoạt tài khoản PHP master',$content);
            // redirect('?mod=users&controller=index$action=login');
            }else{
                $error['account']="Email hoặc username đã tồn tại trên hệ thống";
            }
        }
    }
    load_view('reg');
}
function loginAction()
{
    global $error,$username,$password;
    if (isset($_POST['btn_login'])) {
        $error = array();
        echo $_POST['username'].$_POST['password'];
        #Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống username";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không hợp lệ";
            } else {
                $username = $_POST['username'];
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }
        if (isset($_POST['ck_remember'])) {
            setcookie('username', $username, time() + 3600);
            setcookie('password', $password, time() + 3600);
        }

        #Kết luận
        if (empty($error)) {
            //Xữ lý login
            if (check_login($username, $password)) {
                //Lưu trữ phiên đăng nhập
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                //Chuyển hướng vào trong hệ thống
                redirect();
            } else {
                $error['account'] = "Tài khoản đăng nhập không chính xác";
            }
        }
    }
    load_view('login');
}


function activeAction(){
    $link_login = base_url("?mod=users&action=login");
    $active_token= $_GET['active_token'];
    if(check_active_token($active_token)){
        active_user($active_token);
        echo "bạn đã kích hoạt thành công, vui lòng kích hoạt link sau để đăng nhập <a href='{$link_login}'>HERE</a>";
    }else{
        echo "Yêu cầu kích hoạt không hợp lệ hoặc tài khoản đã được kích hoạt trước đó! vui lòng kích hoạt link sau để đăng nhập <a href='{$link_login}'>HERE</a>";

    }
}

function logoutAction(){
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect('?mod=users&action=login');
}

function resetAction(){
    global $error,$email;
    $reset_token = $_GET['reset_token'];
    if(!empty($reset_token)){
        //khi reset_token có giá trị
        //kiểm tra token có trong hệ thống hay không
        if(check_reset_token($reset_token)){
            if(isset($_POST['btn_new_pass'])){
                $error = array();
                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống password";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "Mật khẩu không đúng định dạng";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }

                if(empty($error)){
                    $data = array(
                        'password'=>$password
                    );
                    update_pass($data,$reset_token);
                    redirect("?mod=users&action=resetSuccess");
                }
            }
            load_view('newPassword');
            
        }else{
            echo "Yêu cầu lấy mất khẩu không hợp lệ";
        }
    }else{
    if(isset($_POST['btn_req'])){
        if(empty($_POST['email'])){
            $error['email']="Không được để trống password";
        }else{
            if(is_email($_POST['email'])){
                $email = $_POST['email'];
            }else{
                $error['email']="Email không đúng định dạng";
            }
        }

        if(empty($error)){
            // echo $email;
            if(check_email($email)){
                $reset_token = md5($email.time());
                $data = array(
                    'reset_token'=>$reset_token
                );
                //cập nhật mã reset pass cho user cần khôi phục
                update_reset_token($data,$email);
                //gửi link reset_token vào email
                $link= base_url("?mod=users&action=reset&reset_token={$reset_token}");
                $content="<p>Bạn vui lòng click vào link sau để khôi phục mật khẩu:{$link}</p>
                        <p>Nếu không phải yêu cầu của bạn bạn vui lòng bò qua email này</p>
                        <p>Unitop team support</p>";
                send_mail($email,'','Khôi phục mật khẩu PHP MASTER',$content);
            }else{
                $error['account']="Địa chỉ email không tồn tại";
            }
        }
    }
    load_view('reset');
}

}

function resetSuccessAction(){
    load_view('resetSuccess');
}
