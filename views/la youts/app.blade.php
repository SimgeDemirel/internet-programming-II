<html>
<head>
    <meta charset="utf-8"/>
    <title>KTBMYO  @yield('title')</title>
</head>
<body>
<table border="1" width="1024" align="center">
    <tr>
        <td colspan="2">
            <h1>Kütahya Dumlupınar Üniversitesi</h1>
        </td>
    </tr>
    <tr>
        <td width="824">
            @yield('content')
        </td>
        <td>
            <ul>
                <li><a href="/member/login">Üye Girişi</a></li>
                <li><a href="/member/register">Üye Ol</a></li>
                <li><a href="/member/lost-password">Şifremi Unuttum</a></li>
            </ul>

        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">Copyright &copy;2023 - KTBMYO</td>
    </tr>
</table>
</body>
</html>
