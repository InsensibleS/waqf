@extends('emails.layout_email')

@section('main-image', $message->embed(public_path('/img/images for emails/human.png')))

@section('heading', 'Change email')

@section('text-before-link')
    You received this email because someone is trying to<br>
    change your email in your Digital WAQF account. <br>
    To confirm your email change follow the link below.
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
            letter-spacing: 1px;">Confirm new email
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

@section('text-after-link')
    <table
        style=
        "background-color: #ffffff;
                            border: 0;
                            border-spacing: 0;
                            padding: 0;
                            width: 400px;"
    >
        <tr>
            <td class="center" style="text-align: center;
                                        vertical-align: middle;
                                        height: 15px;
                                        line-height:15px;
                                        font-size:8px;">
                &nbsp;
            </td>
        </tr>
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
                    If you did not make this request<br>
                    you can safely ignore this email.
                </p>
            </td>
        </tr>
    </table>
@endsection
