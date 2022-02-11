<table style="width: 100%;background: #f9f9f9">
    <tbody>
    <tr>
        <td>
            <table
                style="margin:0 auto;width:100%;max-width:550px;font-family:sans-serif; border-collapse: collapse;border-spacing: 0;">
                <tbody style="border-bottom: 5px solid #1CA2DD;">
                <!--Header-->
                <tr>
                    <td style="padding: 0;">
                        <table
                            style="background:#ffffff;width:100%;padding:25px 0px;border-spacing:0;border-bottom: 1px solid #F7F5FB;">
                            <tbody style="border-collapse: collapse;border-spacing: 0;">
                            <tr>

                                <td style="width:auto; text-align: center;"><img style="width: 70px"
                                                                                 src="{{asset('assets/images/logo-text.png')}}">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td>
                        <table
                            style="width:100%; padding:40px 30px;background: #ffffff;border-bottom: 1px solid #F7F5FB;">
                            <tbody>
                            <tr>
                                <td style="width:100%; padding:5px 0px 30px;text-align: center;color: #363636;font-size:15px;font-weight: bold;margin: 0px">

                                    {{ $subject }}

                                </td>
                            </tr>

                            <tr>
                                <td style="width:100%; font-size:14px; padding:10px 0px 15px;text-align: center;color: #707070;font-weight: 600;font-style:normal">
                                    Hi <span>{{ $data['name'] }} </span>
                                </td>
                            </tr>

                            <tr>
                                <td style="width:100%;font-weight:inherit; font-size:12px;color: #707070; padding:5px 0px 15px;text-align: center;line-height: 18px;">
                                    <div>{!! $data['msg'] !!}</div>
                                </td>
                            </tr>

                            <tr>
                                <td style="line-height:20px;width:100%;font-weight:inherit; font-size:12px;color: #707070; padding:10px 0px 15px;text-align: center;">
                                    <p style="font-weight: 600;">- Support Team</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width:100%;padding:0px 10px 10px;font-size: 12px">
                            <tbody>

                            <tr>
                                <td style="width:100%;font-weight:inherit; font-size:10px;color: #707070; padding:20px 0px 15px;text-align: center;">
                                    &copy; 2022 A Plus | All rights reserved.
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>

                </tbody>
            </table>

        </td>
    </tr>
    </tbody>
</table>
