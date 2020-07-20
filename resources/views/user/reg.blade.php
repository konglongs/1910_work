<form action="{{url('/user/regs')}}" method="post">
    <table>
        <tr>
            <td>账号</td>
            <td><input type="text" name="u_name">
                <span style="color: red">{{$errors->first('u_name')}}</span>
            </td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="text" name="u_email">
                <span style="color: red">{{$errors->first('u_email')}}</span>
            </td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="u_pwd">
                <span style="color: red">{{$errors->first('u_pwd')}}</span>
            </td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td><input type="password" name="u_pwds">
                <span style="color: red">{{$errors->first('u_pwds')}}</span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
