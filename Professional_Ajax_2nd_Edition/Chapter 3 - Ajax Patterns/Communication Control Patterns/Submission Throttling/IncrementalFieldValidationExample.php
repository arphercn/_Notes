<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Incremental Field Validation Example</title>
        <script type="text/javascript" src="zxml.js"></script>
        <script type="text/javascript" src="IncrementalFieldValidation.js"></script>
    </head>
    <body>
        <h1>Sign Up!</h1>
        <p>To begin, please select a username.</p>
        <form method="post" action="Success.php">
            <table>
                <tr>
                    <td><label for="txtUsername">Username</label></td>
                    <td><input type="text" id="txtUsername" name="txtUsername" /><img src="error.gif" alt="Error" id="imgUsernameError" style="display:none" /></td>
                </tr>
            </table>
            <input type="submit" id="btnNext" value="Next" />
        </form>
    </body>
</html>
