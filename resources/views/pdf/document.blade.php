<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    @page {
      margin: 0;
    }

    body {
      font-family: "Open Sans", sans-serif;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      font-variation-settings: "wdth" 100;
      padding: 22px;
      margin: 0px;
    }

    .page {
      width: 100%;
      height: 1076px;
      overflow: hidden;
      border: 1px solid red;
    }

    .page::after {
      page-break-after: always;
    }

    .logo {
        width: 100%;
        height: auto;
        max-width: 200px;
        vertical-align: middle;
      }

      .h2 {
        text-align: center;
        font-size: 20px;
      }
      .h2 span {
        text-decoration: underline;
      }
      .h2 .small {
        font-size: 16px;
        color: red;
      }

    table {
      width: 100%;
    }

    table th {
      text-align: left;
    }

    table td {
      vertical-align: top;
    }

    div.table {
      display: table;
      width: 250px;
      table-layout: inherit;
    }

    div.table>div.cell {
      display: table-cell;
      width: 2%;
    }

    .p1-table {
      font-size: 13px;
      font-family: "Times";
    }


    .p1-table tr {
      line-height: 14px;
    }
    .p1-table tr td{
      width: 50%;
    }

  </style>
</head>

<body>

  <div class="page">
    <div style="padding:0 40px;">
      <div style="float:left; width:30%; margin-right: 4%">
        <img class="logo" src="http://localhost/rental-insurance/public/assets/images/rental_insurance_logo.png" alt="logo"/>
      </div>
      <div style="float: left; width: 65%;">
        <table style="font-size:8px;">
          <thead>
            <tr>
              <th>COMPANY</th>
              <th>CONTACT</th>
              <th>HEAD OFFICE</th>
              <th>MAILING</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="white-space: nowrap;">
                Leo & Leo Pty Ltd<br />
                ACN: 084 958 029<br />
                ABN: 31 084 958 029<br />
                CAPI #: 409 398 430
              </td>
              <td>
                Ph: 1300 22 67 67<br />
                Fax: 1300 79 7120<br />
                admin@acornrentals.com.au<br />
                Website: acornrentals.com.au
              </td>
              <td>
                7/33 Waterloo Rd<br />
                Macquarie Park<br />
                NSW 2113
              </td>
              <td>
                Po Box 1645<br />
                Macquarie Centre<br />
                NSW 2113
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div>
      <h2 class="h2"><span>COMPLETED HIRE PARTICULARS:</span><span class="small">No. RA#-70486</span></h2>
      <table class="p1-table">
        <thead>
          <th>MAIN HIRER:</th>
          <th>JOINT HIRER:</th>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Ross Holburt</td>
            <td></td>
          </tr>
          <tr>
            <td>33 Dale Ave, Pascoe Vale, VIC 3044</td>
            <td></td>
          </tr>
          <tr>
            <td>Licence number: 029764031</td>
            <td>Licence number:</td>
          </tr>
          <tr>
            <td>Class: C</td>
            <td>Class:</td>
          </tr>
          <tr>
            <td>State: VIC</td>
            <td>State:</td>
          </tr>
          <tr>
            <td>D.O.B: 04/05/1961</td>
            <td>D.O.B:</td>
          </tr>
          <tr>
            <td>Exp. Date: 27/06/2024</td>
            <td>Exp. Date:</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="margin-top:28px;">XXXXXXXXXXXXXXXXXXx</div>
  </div>



  <div class="page">
    <table>
      <thead>
        <th>abc</th>
      </thead>
    </table>
  </div>
  <!--
  <div class="page"></div>
  <div class="page"></div>
  <div class="page"></div>
-->

</body>

</html>
