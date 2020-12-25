<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;700;900&display=swap"
          rel="stylesheet">

</head>
<body
    style=
    "margin: 0;
padding: 0;
font-family: 'Red Hat Display';
">
<table class="Main-table"
       style=
       "width: 600px;
    background-color: #d0d0d1;
    border: 0;
    border-spacing: 0;
    text-align: center;
    ">
    <tr>
        <td class="center"
            style="text-align: center;
                vertical-align: middle;
                height: 30px;
                line-height:30px;
                font-size:8px;">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td
            style="text-align: center;
                vertical-align: middle;
                height: 50px;
                line-height:50px;
                font-size:8px;
                width: 100px;">
            &nbsp;
        </td>
        <td class="Main-td">
            <!-- HEADER -->
            <table style=
                   "background-color: #ffffff;
                        border: 0;
                        border-spacing: 0;
                        padding: 0;
                        width: 400px;">
                <tr>
                    <td class="header-td" style=
                    "text-align: left;
                            padding-top: 20px;
                            padding-left: 30px;">
                        <img class="logo-img" src="{{$message->embed(public_path('/img/images for emails/logo.png'))}}"
                             alt="logo" style="width: 50px; height: 30px;">
                    </td>
                </tr>
            </table>
            <!-- HEADER END -->
            <!-- CONTENT STARTS  -->
            <table
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;
                            padding-bottom: 15px;"
                class="main-image-table"
            >
                <tr>
                    <td class="center" style=
                    "text-align: center;
                                    vertical-align: middle;">
                        <img class="main-img" src="{{$message->embed(public_path('/img/images for emails/human.png'))}}"
                             alt="main-image">
                    </td>
                </tr>
            </table>
            <table
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;"
            >
                <tr>
                    <td class="center" style=
                    "text-align: center;
                                    vertical-align: middle;">
                        <p
                            class="congratuations"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 5px;
                                        margin-top: 0;"
                        >Congratulations!</p>
                    </td>
                </tr>
            </table>
            <table
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;"
            >
                <tr>
                    <td class="center" style=
                    "text-align: center;
                                    vertical-align: middle;">
                        <h1
                            class="main-heading"
                            style=
                            "font-size: 30px;
                                        margin-bottom: 35px;
                                        margin-top: 0;
                                        font-weight: bold;">
                            Account Created</h1>
                    </td>
                </tr>
            </table>
            <table
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;"
            >
                <tr>
                    <td
                        class="main-text-td"
                        style=
                        "text-align: center;
                                    padding-right: 30px;
                                    padding-left: 30px;
                                    width: 400px;">
                        <p
                            class="main-text"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        line-height: 150%;
                                        max-width: 340px;
                                        text-align: center;"
                        >Your account has been successfully created
                        </p>
                    </td>
                </tr>
                <tr>
                    <td
                        class="main-text-td"
                        style=
                        "text-align: center;
                                    padding-right: 30px;
                                    padding-left: 30px;
                                    width: 400px;">
                        <p
                            class="main-text"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        line-height: 150%;
                                        max-width: 340px;
                                        text-align: center;"
                        >
                            Just follow this link below to confirm your email address and you can return
                            to the site and start using all the privileges of registered user:
                        </p>
                    </td>
                </tr>
            </table>
            <table
                class="link-table"
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 100%;
                            text-align: center;"
            >
                <tr>
                    <td class="center"
                        style="text-align: center;
                                        vertical-align: middle;
                                        height: 15px;
                                        line-height:15px;
                                        font-size:8px;">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="center"
                        style=
                        "text-align: center;
                                    vertical-align: middle;">
                        <a
                            href="#"
                            class="main-link"
                            style=
                            "font-size: 14px;
                                        text-decoration: underline;
                                        color: #f46036;
                                        text-align: center;"
                        >http://web.fr/r7573/confirm1234/user219</a>
                    </td>
                </tr>
                <tr>
                    <td class="center"
                        style="text-align: center;
                                    vertical-align: middle;
                                    height: 15px;
                                    line-height:15px;
                                    font-size:8px;">
                        &nbsp;
                    </td>
                </tr>
            </table>
            <table
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;"
            >
                <tr>
                    <td class="main-text-td"
                        style=
                        "text-align: center;
                                    padding-right: 30px;
                                    padding-left: 30px;
                                    width: 400px;">
                        <p
                            class="main-text"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        line-height: 150%;
                                        max-width: 340px;
                                        text-align: center;"
                        >
                            If you haven't done this, please contact our support team.
                        </p>
                    </td>
                </tr>
            </table>
            <table
                class="grey-text-table"
                style=
                "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;"
            >
                <tr>
                    <td class="center"
                        style="text-align: center;
                                        vertical-align: middle;
                                        height: 60px;
                                        line-height:60px;
                                        font-size:8px;">
                        &nbsp;
                    </td>
                </tr>

                <tr
                    class="first-grey-row"
                    style=
                    "padding-bottom: 15px;"
                >
                    <td>
                        <p
                            class="grey-text"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        line-height: 150%;
                                        text-align: center;
                                        color: #717374;
                                        width: 100%;"
                        >
                            Get in touch if you have questions or need help
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p
                            class="grey-text"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        line-height: 150%;
                                        text-align: center;
                                        color: #717374;
                                        width: 100%;"
                        >
                            All the best,
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p
                            class="grey-text"
                            style=
                            "font-size: 14px;
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        line-height: 150%;
                                        text-align: center;
                                        color: #717374;
                                        width: 100%;"
                        >
                            Digital WAQF team
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="center"
                        style="text-align: center;
                                            vertical-align: middle;
                                            height: 15px;
                                            line-height:15px;
                                            font-size:8px;">
                        &nbsp;
                    </td>
                </tr>
            </table>
            <table class="orange-text-table"
                   style=
                   "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;
                            "
            >
                <tr>
                    <td class="center" style=
                    "text-align: center;
                                    vertical-align: middle;">

                        <a href="mailto:vlad@htmlbook.ru" class="orange-text"
                           style=
                           "font-size: 14px;
                                    font-weight: bold;
                                    color: #F46036;
                                    margin-bottom: 0;
                                    margin-top: 0;
                                    cursor: pointer;">Send us a message</a>

                    </td>
                </tr>
                <tr>
                    <td class="center"
                        style="text-align: center;
                                            vertical-align: middle;
                                            height: 40px;
                                            line-height:40px;
                                            font-size:8px;">
                        &nbsp;
                    </td>
                </tr>
            </table>
            <!-- CONTENT END -->
            <!-- FOOTER STARTS -->
            <table
                class="footer-table"
                style=
                "
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;
                            background-color: #08796A;
                            color: #fff;">
                <tr>
                    <td class="center"
                        style="text-align: center;
                                        vertical-align: middle;
                                        height: 22px;
                                        line-height:22px;
                                        font-size:8px;">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td
                        style="text-align: center;
                                        vertical-align: middle;
                                        height: 50px;
                                        line-height:30px;
                                        font-size:8px;
                                        width: 30px;">
                        &nbsp;
                    </td>
                    <td>
                        <table class="footer-table-inner"
                               style=
                               "
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            background-color: #08796A;
                            color: #fff;
                            width: 100%;">
                            <tr>
                                <td
                                    class="footer-pic"
                                    style=
                                    "width: 22px;
                                        padding-right: 15px;">
                                    <img src="{{$message->embed(public_path('/img/images for emails/location.png'))}}"
                                         alt="location">
                                </td>
                                <td class="align-left" style=
                                "text-align: left;">
                                    <p
                                        class="footer-info"
                                        style=
                                        "font-size: 13px;
                                            font-weight: 500;
                                            max-width: 200px;
                                            margin-top: 0;
                                            margin-bottom: 0;">
                                        Poklonnaya street 3, office 3.01, Moscow 121170, Russia</p>
                                </td>
                            </tr>
                        </table>
                        <table class="footer-table-inner"
                               style=
                               "
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            background-color: #08796A;
                            color: #fff;
                            width: 100%;">
                            <tr>
                                <td
                                    class="footer-pic"
                                    style=
                                    "width: 22px;
                                        padding-right: 15px;">
                                    <img src="{{ $message->embed(public_path('/img/images for emails/email.png'))}}"
                                         alt="email">
                                </td>
                                <td class="align-left" style=
                                "text-align: left;">
                                    <p
                                        class="footer-info"
                                        style=
                                        "font-size: 13px;
                                            font-weight: 500;
                                            max-width: 200px;
                                            margin-top: 0;
                                            margin-bottom: 0;"
                                    >info@waqf.com</p>
                                </td>
                            </tr>
                        </table>
                        <table class="footer-table-inner"
                               style=
                               "
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            background-color: #08796A;
                            color: #fff;
                            width: 100%;">
                            <tr>
                                <td
                                    class="footer-rights"
                                    style="padding-top: 35px;"
                                >
                                    <p
                                        class="footer-rights"
                                        style=
                                        "font-size: 13px;
                                            font-weight: 400;
                                            margin-top: 0;
                                            margin-bottom: 0;
                                            text-align: left;"
                                    >Digital WAQF 2020 &copy;.</p>
                                    <p
                                        class="footer-rights"
                                        style=
                                        "font-size: 13px;
                                            font-weight: 400;
                                            margin-top: 0;
                                            margin-bottom: 0;
                                            text-align: left;"
                                    >All rights reserved.</p>
                                </td>
                                <td
                                    class="footer-icons"
                                    style=
                                    "vertical-align: bottom;
                                        text-align: right;">
                                    <a href="#">
                                        <img class="socials"
                                             src="{{ $message->embed(public_path('/img/images for emails/facebook.png'))}}"
                                             alt="facebook" style="vertical-align: bottom; margin-left: 20px;">
                                    </a>
                                    <a href="#">
                                        <img class="socials"
                                             src="{{ $message->embed(public_path('/img/images for emails/linkedin.png'))}}"
                                             alt="linkedin" style="vertical-align: bottom; margin-left: 20px;">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="text-align: center;
                                        vertical-align: middle;
                                        height: 50px;
                                        line-height:30px;
                                        font-size:8px;
                                        width: 30px;">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="center"
                        style="text-align: center;
                            vertical-align: middle;
                            height: 22px;
                            line-height:22px;
                            font-size:8px;">
                        &nbsp;
                    </td>
                </tr>
            </table>
            <!-- FOOTER END -->
        </td>
        <td style=
            "text-align: center;
            vertical-align: middle;
            height: 50px;
            line-height:50px;
            font-size:8px;
            width: 100px;">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td class="center" style="text-align: center;
                    vertical-align: middle;
                    height: 50px;
                    line-height:50px;
                    font-size:8px;">
            &nbsp;
        </td>
    </tr>
</table>
</body>
</html>
