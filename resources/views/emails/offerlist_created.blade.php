<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer List Created</title>
</head>

<body>
    <!-- Main Area -->
    <div class="main" style="width:50vw; margin:0 auto;  padding: 5px 10px 10px 10px;">
        <table cellpadding="0" cellspacing="0" border="0"
            style="background:#fff;border-collapse:collapse;width:650px;margin:0px;border:1px solid rgb(224,224,224);padding:0px;color:#333;text-align:center;font-family:Arial,Helvetica,sans-serif;text-align:center">
            <tbody>
                <tr>
                    <td style="padding:5px 15px;border-bottom:1px solid #f1f1f1;text-align:center">
                        <a href="https://www.discountzshop.com/" target="_blank"
                            data-saferedirecturl="https://www.google.com/url?q=https://www.ngenitltd.com/&amp;source=gmail&amp;ust=1683110822015000&amp;usg=AOvVaw1oh2knrZ8dutUp_6pTWSeQ">
                            <img src="https://www.discountzshop.com/storage/webSetting/site_logo_black/oWIkHcvg6U1725872126.png"
                                height="80px" alt="DiscountZShop" border="0" width="230px" data-bit="iit"
                                style="object-fit: contain">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;padding:15px 15px 5px 15px;font-size:18px">
                        A New Offer List is added in DiscountZShop.
                    </td>
                </tr>

                <tr style="position: relative;bottom: 10px;">
                    <td style="padding:0 15px;">
                        {{-- <p>The following is the short details of the Offer List:</p> --}}
                        <table cellpadding="0" cellspacing="0" border="0" style="width:620px;">
                            <tbody>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:200px;background-color:#f1f1f1;
                                        padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        Offer Name</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;
                                        font-weight:700;font-size:15px;text-align:left">
                                        &nbsp; {{ $offer->name }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:200px;background-color:#f1f1f1;padding:10px 15px;border-top:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        Category Name:</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ $offer->category->name }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="min-width:100px;max-width:200px;background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Added By</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;color:red;font-weight:700;
                                        border-right:1px solid #f1f1f1;font-size:14px;text-align:left">
                                        &nbsp; {{ $offer->added->name }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Start Date</th>
                                    <td
                                        style="padding:10px 15px;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ $offer->start_date }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Expire Date</th>
                                    <td
                                        style="padding:10px 15px;border-bottom:1px solid #f1f1f1;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ $offer->expiry_date }}</td>
                                </tr>
                                <tr>
                                    <th
                                        style="background-color:#f1f1f1;padding:10px 15px;font-size:12px;text-align:left">
                                        Status</th>
                                    <td
                                        style="padding:10px 15px;border-bottom:1px solid #f1f1f1;border-top:1px solid #f1f1f1;border-right:1px solid #f1f1f1;font-size:12px;text-align:left">
                                        &nbsp; {{ ucfirst($offer->status) }}</td>
                                </tr>

                                <tr>
                                    <th style="padding:10px 15px; background-color:#f1f1f1;">Live Link</th>
                                    <td style="padding:10px 15px;">
                                        <a href="{{ route('offer.details', $offer->slug) }}"
                                           style="display: inline-block; background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                                            View Offer
                                        </a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding:15px 0;text-align:center;background-color:#eaeaea;font-size:14px;">
                        Thank you, from Logistics Department <strong>discountzshop.com</strong>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
