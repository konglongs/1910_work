<form action="{{url('/user/logins')}}" method="post">
    <span style="color: red">{{session('msg')}}</span>

    <table>
        <tr>
            <td>账号</td>
            <td><input type="text" name="u_name" placeholder="填写账号或邮箱">
                <span style="color: red">{{$errors->first('u_name')}}</span>
            </td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="u_pwd" placeholder="填写密码">
                <span style="color: red">{{$errors->first('u_pwd')}}</span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
