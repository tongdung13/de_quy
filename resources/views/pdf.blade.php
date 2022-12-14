<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* @page {
        size: array(0,0,720, 1200) landscape;
    } */

        /* * {

    } */

        body {
            /* font-family: Arial, Helvetica, sans-serif; */
            font-family: DejaVu Sans, sans-serif;
            font-size: 8px;
        }

        .honda {
            border-collapse: collapse;
            width: 100%;
        }

        /* .table th {
        border: 0.5px solid #000000;
        padding: 4px;
    } */

        .honda td {
            border: 0.5px solid #000000;
            padding: 4px;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            border: 0.5px solid #000000;
            padding: 4px;
        }

        .table td {
            border: 0.5px solid #000000;
            padding: 10px;
        }

        /* .table tr:nth-child(even) {} */

        /*background-color: #f2f2f2;*/
        /* .table tr:hover {} */

        /*background-color: #ddd;*/
        /* .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #85d7f2;
        font-weight: normal;
    } */

        /* #footer {
        bottom: 0;
        border-top: 0.1pt solid #aaa;
    }

    .page-number:before {
        position: fixed;
        content: "Trang "counter(page);

        z-index: -12000;
    } */
        .vehicle {
            border-collapse: collapse;
            width: 100%;
        }

        .vehicle th {
            border: 0.5px solid #000000;
            padding: 4px;
        }

        .vehicle td {
            border: 0.5px solid #000000;
            padding: 10px;
        }
    </style>
</head>

<body>
    <main>
        <div class="reception">
            <div style="display: flex; height: 110px">
                <div>
                    <img src="{{ public_path('images/1.png') }}" alt=""
                        srcset="{{ public_path('images/1.png') }} 2x" style="width: 100px">
                </div>
                <div style="text-align: center">
                    <h1>PHI???U TI???P NH???N</h1>
                    <h2>(Reception Sheet)</h2>
                    <h3>Ng??y &nbsp; &nbsp; (Issuedate): &nbsp;&nbsp; / &nbsp;&nbsp; / </h3>
                </div>
                <div style="margin-left: 75%">
                    <p>C??NG TY HONDA VI???T NAM</p>
                    <p>?????a ch??? (Address) : Ph??c Th???ng, Ph??c Y??n, V??nh Ph??c</p>
                    <p>M?? s??? thu???: 2500 150543</p>
                    <p>S??? ??i???n tho???i :</p>
                    <p>FAX :</p>
                </div>
            </div>
        </div>
        <table class="honda">
            <tbody>
                <tr>
                    <td colspan="2" style="width: 50%; text-align: center">Ch??? s??? h???u <br />
                        (Sold to Party)</td>
                    <td colspan="3" style="width: 100%"></td>
                    <td colspan="2" style="width: 40%; text-align: center">Ng?????i l??m d???ch v??? <br />
                        (Car Driver)</td>
                    <td colspan="3" style="width: 100%"></td>
                    <td colspan="1" style="width: 30%; text-align: center">M?? KH <br />
                        Code</td>
                    <td colspan="1" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 50%; text-align: center">??i???n tho???i <br />
                        (Telephone)</td>
                    <td colspan="1" style="width: 100%"></td>
                    <td colspan="1" style="width: 40%; text-align: center">M?? KH <br />
                        Code</td>
                    <td colspan="1" style="width: 100%"></td>
                    <td colspan="2" style="width: 30%; text-align: center">??i???n tho???i <br />
                        (Telephone)</td>
                    <td colspan="2" style="width: 100%"></td>
                    <td colspan="1" style="width: 40%; text-align: center">Email</td>
                    <td colspan="2" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 50%; text-align: center">?????a ch??? <br />
                        (Address)</td>
                    <td colspan="3" style="width: 100%"></td>
                    <td colspan="2" style="width: 40%; text-align: center">?????a ch??? <br />
                        (Address)</td>
                    <td colspan="5" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 50%; text-align: center">
                        CMND (MST/Passport)</td>
                    <td colspan="1" style="width: 100%"></td>
                    <td colspan="1" style="width: 40%; text-align: center">Email</td>
                    <td colspan="3" style="width: 100%"></td>
                    <td colspan="2" style="width: 40%; text-align: center">H???n tr?????c <br />
                        Booking</td>
                    <td colspan="3" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 50%; text-align: center">
                        S??? VIN</td>
                    <td colspan="1" style="width: 100%"></td>
                    <td colspan="1" style="width: 40%; text-align: center">Bi???n s??? <br />
                        (Plate number)</td>
                    <td colspan="3" style="width: 100%"></td>
                    <td colspan="2" style="width: 40%; text-align: center">Chi???n d???ch
                        (Campaign/ Recall)</td>
                    <td colspan="3" style="width: 100%"></td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 50%; text-align: center">Ng??y ????ng k?? b???o h??nh
                        (Registration Date) </td>
                    <td colspan="1" style="width: 100%"></td>
                    <td colspan="1" style="width: 40%; text-align: center">S??? km <br />
                        (Mileage)</td>
                    <td colspan="3" style="width: 100%"></td>
                    <td colspan="2" style="width: 40%; text-align: center">Ng??y h???t h???n b???o hi???m</td>
                    <td colspan="3" style="width: 100%"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="customer">
            <table class="table">
                <thead>
                    <tr>
                        <th>S??? (No.)</th>
                        <th>Y??u c???u c???a kh??ch h??ng <br /> (Customer Requests)</th>
                        <th>Ghi ch?? <br /> (Remarks)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>C???n s???a g???p</td>
                        <td>Ok</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <table class="vehicle">
            <thead>
                <tr>
                    <th colspan="6" rowspan="7" style="width: 50%;">
                        <img src="{{ public_path('images/2.png') }}" alt=""
                            srcset="{{ public_path('images/2.png') }} 2x">
                    </th>
                    <th colspan="3" rowspan="6" style="width: 25%;">
                        Th??ng tin kh??c <br /> (Specified information)
                    </th>
                    <th colspan="3" rowspan="1" style="width: 25%; text-align: center">
                        R???a xe ( Car wash )
                    </th>
                </tr>
            </thead>
        </table>
    </main>
</body>
</html>
