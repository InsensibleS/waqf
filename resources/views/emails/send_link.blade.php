@extends('emails.layout_email')

@section('main-image', $message->embed(public_path('/img/images for emails/human.png')))

@section('congratulations')
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
@endsection

@section('heading', 'Account Created')

@section('text-before-link')
    Your account has been successfully created<br>
    Just follow this link below to confirm your email address and you can return
    to the site and start using all the privileges of registered user:
@endsection

@section('link-btn')
<table class="link-table" style="background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 100%;
                            text-align: center;">
    <tr>
        <td class="center" style="text-align: center;
                                        vertical-align: middle;
                                        height: 30px;
                                        line-height:30px;
                                        font-size:8px;">
            &nbsp;
        </td>
    </tr>
    <tr>
        <td class="center" style="text-align: center;
                                                        vertical-align: middle;">
            <a href="{{$link}}" class="main-link"
               style="font-size: 14px;
            text-transform: uppercase;
            color: #ffffff;
            background-color: #08796A;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            font-weight: 700;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right: 30px;
            padding-left: 30px;
            letter-spacing: 1px;">Go to my profile
            </a>
        </td>
    </tr>
    <tr>
        <td class="center" style="text-align: center;
                                    vertical-align: middle;
                                    height: 15px;
                                    line-height:15px;
                                    font-size:8px;">
            &nbsp;
        </td>
    </tr>
</table>
@endsection
