<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Ajax</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <form id="frm">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                {{-- <td></td> --}}
                <td><input type="submit" name="submit" value="submit" id="frmsubmit"></td>
            </tr>
        </table>
    </form>
    <script>
        $('#frm').submit(function(e){
            e.preventDefault();
            alert('test');
            $.ajax({
                url : route{{ 'form_submit' }},
                data: $('#frm').serialize(),
                type: 'post',
                success: function(result){
                    console.log(result);
                }
            })
        })
    </script>
</body>

</html>
