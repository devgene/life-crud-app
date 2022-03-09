<!DOCTYPE html>
<html>
<head>
    <title>Life Crud</title>
</head>
<body>
    <table style="max-width:80%;boarder:1px solid #B4DBFC">

        <tr>
            <td align="left">
                <div style="padding:45px 32px;text-align:left;border-bottom:1px solid #f5f5f6">
                    <h4>Dear {{ $details['name'] }}</h4>
                    <p><b>Welcome to Our Application!!!</b></p>
                    <p>{{ $details['body'] }}.</p>
                    <p>Thank you</p>
                    <p>Team</p>
                </div>
            </td>
        </tr>
    </table>

</body>
</html>
