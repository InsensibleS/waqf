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

@section('text-before-link')
    Your account has been successfully created<br>
    Just follow this link below to confirm your email address and you can return
    to the site and start using all the privileges of registered user:
@endsection

@section('link', $link)

