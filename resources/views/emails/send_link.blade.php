<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Red Hat Display";
        }
        table {
            background-color: #ffffff;
            border: 0;
            border-spacing: 0;
            padding: 0;
            width: 400px;
        }
        table[class="Main-table"] {
            width: 600px;
            background-color: #d0d0d1;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 30px;
            padding-bottom: 50px;
        }
        table[class="main-image-table"] {
            padding-bottom: 15px;
        }
        table[class="link-table"] {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        table[class="grey-text-table"] {
            padding-top: 60px;
            padding-bottom: 15px;
        }
        table[class="orange-text-table"] {
            padding-bottom: 40px;
        }
        table[class="footer-table"] {
            background-color: #08796A;
            color: #fff;
            padding-top: 22px;
            padding-bottom: 22px;
            padding-left: 30px;
            padding-right: 30px;
        }
        table[class="footer-table-inner"] {
            background-color: #08796A;
            color: #fff;
            width: 100%;
        }
        td[class="center"] {
            text-align: center;
            vertical-align: middle;
        }
        td[class="header-td"] {
            text-align: left;
            padding-top: 20px;
            padding-left: 30px;
        }
        td[class="main-text-td"] {
            text-align: center;
            padding-right: 30px;
            padding-left: 30px;
            width: 400px;
        }
        td[class="align-left"] {
            text-align: left;
        }
        td[class="footer-pic"] {
            width: 22px;
            padding-right: 15px;

        }
        td[class="footer-rights"] {
            padding-top: 35px;
        }
        td[class="footer-icons"] {
            vertical-align: bottom;
            text-align: right;
        }
        tr[class="first-grey-row"] {
            padding-bottom: 15px;
        }
        tr[class="align-left"] {
            text-align: left;
        }
        img[class="logo-img"] {
            width: 50px;
            height: 30px;
        }
        img[class="main-img"] {
            width: 93px;
            height: 100px;
        }
        img[class="socials"] {
            vertical-align: bottom;
            margin-left: 20px;
        }
        p[class="congratulations"] {
            font-size: 14px;
            margin-bottom: 5px;
            margin-top: 0;
        }
        p[class="main-text"] {
            font-size: 14px;
            margin-bottom: 0;
            margin-top: 0;
            line-height: 150%;
            max-width: 340px;
            text-align: center;
        }
        p[class="grey-text"] {
            font-size: 14px;
            margin-bottom: 0;
            margin-top: 0;
            line-height: 150%;
            text-align: center;
            color: #717374;
            width: 100%;
        }
        p[class="orange-text"] {
            font-size: 14px;
            font-weight: bold;
            color: #F46036;
            margin-bottom: 0;
            margin-top: 0;
            cursor: pointer;
        }
        p[class="footer-info"] {
            font-size: 13px;
            font-weight: 500;
            max-width: 200px;
            margin-top: 0;
            margin-bottom: 0;
        }
        p[class="footer-rights"] {
            font-size: 13px;
            font-weight: 400;
            margin-top: 0;
            margin-bottom: 0;
        }
        h1[class="main-heading"] {
            font-size: 30px;
            margin-bottom: 35px;
            margin-top: 0;
            font-weight: bold;
        }
        a[class="main-link"] {
            font-size: 14px;
            text-decoration: underline;
            color: #f46036;
        }
        @media only screen and (max-width: 480px) {
            table{
                max-width: 380px!important;
            }
            table[class="Main-table"] {
                width: 100%!important;
            }
        }
    </style>
</head>
<body>
<table class="Main-table" style="width: 600px;
            background-color: #d0d0d1;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 30px;
            padding-bottom: 50px;">
    <tr>
        <td class="Main-td">
            <!-- HEADER -->
            <table>
                <tr>
                    <td class="header-td">
                        <img class="logo-img" src="logo.png" alt="logo">
                    </td>
                </tr>
            </table>
            <!-- HEADER END -->
            <!-- CONTENT STARTS  -->
            <table class="main-image-table">
                <tr>
                    <td class="center">
                        <img class="main-img" src="human.png" alt="main-image">
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="center">
                        <p class="congratuations">Congratulations!</p>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="center">
                        <h1 class="main-heading">Account Created</h1>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="main-text-td">
                        <p class="main-text">Your account has been successfully created</p>
                    </td>
                </tr>
                <tr>
                    <td class="main-text-td">
                        <p class="main-text">Just follow this link below to confirm your email address and you can return
                            to the site and start using all the privileges of registered user:
                        </p>
                    </td>
                </tr>
            </table>
            <table class="link-table">
                <tr>
                    <td class="center">
                        <a href="#" class="main-link">http://web.fr/r7573/confirm1234/user219</a>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="main-text-td">
                        <p class="main-text">
                            If you haven't done this, please contact our support team.
                        </p>
                    </td>
                </tr>
            </table>
            <table class="grey-text-table">
                <tr class="first-grey-row">
                    <td>
                        <p class="grey-text">
                            Get in touch if you have questions or need help
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="grey-text">
                            All the best,
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="grey-text">
                            Digital WAQF team
                        </p>
                    </td>
                </tr>
            </table>
            <table class="orange-text-table">
                <tr>
                    <td class="center">
                        <p class="orange-text">
                            Send us a message
                        </p>
                    </td>
                </tr>
            </table>
            <!-- CONTENT END -->
            <!-- FOOTER STARTS -->
            <table class="footer-table">
                <tr>
                    <td >
                        <table class="footer-table-inner">
                            <tr>
                                <td class="footer-pic">
                                    <img src="location.png" alt="location">
                                </td>
                                <td class="align-left">
                                    <p class="footer-info">Poklonnaya street 3, office 3.01, Moscow 121170, Russia</p>
                                </td>
                            </tr>
                        </table>
                        <table class="footer-table-inner">
                            <tr>
                                <td class="footer-pic">
                                    <img src="email.png" alt="email">
                                </td>
                                <td class="align-left">
                                    <p class="footer-info">info@waqf.com</p>
                                </td>
                            </tr>
                        </table>
                        <table class="footer-table-inner">
                            <tr>
                                <td class="footer-rights">
                                    <p class="footer-rights">Digital WAQF 2020 &copy;.</p>
                                    <p class="footer-rights">All rights reserved.</p>
                                </td>
                                <td class="footer-icons">
                                    <a href="#">
                                        <img class="socials" src="facebook.png" alt="facebook">
                                    </a>
                                    <a href="#">
                                        <img class="socials" src="linkedin.png" alt="linkedin">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- FOOTER END -->
        </td>
    </tr>
</table>
</body>
</html>
