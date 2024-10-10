<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
  </style>
  <body>
    <table
      style="
        margin: auto;
        margin-top: 70px;
        font-family: Arial, Helvetica, sans-serif;
      "
      width="1200px"
    >
      <thead>
        <tr style="width: 50%">
          <th>
            <div style="display: flex">
              <h2 style="color: red; font-size: 100px">
                <img
                  style="margin-left: 30px"
                  src="https://acorn.accrualdev.com/public/assets/images/rental_insurance_logo.png"
                  alt=""
                  width="300px"
                />
              </h2>
            </div>
          </th>
          <th style="width: 50%">
            <div style="background-color: red">
              <p
                style="
                  padding-inline: 50px;
                  padding-top: 10px !important;
                  color: white;
                "
              >
                Please quote rental agreement number <br />
                on all correspondence and remittances
              </p>
              <div
                style="
                  background-color: white;
                  margin-inline: 50px;
                  border: 10px solid red;
                  border-radius: 12px;
                "
              >
              @php
              $randomId =   rand(0, 99999);
              @endphp
                <p
                  style="
                    text-transform: uppercase;
                    text-align: left;
                    color: red;
                    padding: 5px;
                  "
                >
                  RENTAL AGREEMENT number
                </p>
                <p>{{$randomId}}</p>
              </div>
            </div>
            <div style="display: flex">
              <div
                style="width: 70%; border: 1px solid red; padding-block: 5px"
              >
                Tax invoice copy
              </div>
              <div
                style="
                  width: 30%;
                  border: 1px solid red;
                  color: rgba(0, 0, 0, 0.63);
                  font-size: 10px;
                  padding-top: 8px !important;
                "
              >
              @php
              echo date("d/m/Y");
               @endphp
              </div>
            </div>
            <div style="border: 2px solid red">
              <div style="text-align: left; color: red; padding: 5px">
                ACCOUNT NUMBER
              </div>
              <div>AV869979180005</div>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div
              style="
                padding-left: 60px;
                color: red !important;
                font-weight: bold;
              "
            >
              FOR PAYMENT INSTRUCTIONS SEE BELOW
            </div>
            <div style="margin-top: 50px; padding-left: 60px !important">
              <p>QBE AUS DIRECT CLAIMS</p>
              <p>NIMMY/219302/QBE</p>
              <p>LVL5/2 PARK ST</p>
              <p>SYDNEY NSW 2000 <span style="margin-left: 100px">AU</span></p>
            </div>
          </td>
          <td>
            <div style="padding-left: 150px !important; margin-top: 40px">
              <p style="font-weight: bold">Avis Australia</p>
              <p style="font-weight: bold">PO Box 246</p>
              <p style="font-weight: bold">MASCOT 1460 NSW</p>
              <p style="font-weight: bold">AUSTRALIA</p>
            </div>
            <div
              style="
                padding-left: 150px !important;
                padding-top: 30px !important;
              "
            >
              <p>Enquiries</p>
              <p><span>1800</span> <span>141</span> <span>000</span></p>
              <p>queries@aveis.con.au</p>
            </div>
            <div
              style="
                padding-left: 150px !important;
                padding-top: 30px !important;
              "
            >
              <p>
                <span>CCI</span
                ><span style="padding-left: 80px !important">100010324908</span>
              </p>
              <p>
                <span>Voucher No</span
                ><span style="padding-left: 30px !important">V123456</span>
              </p>
              <p>
                <span>Voucher Max</span
                ><span style="padding-left: 20px !important"
                  >570.57 AUD 570.57</span
                >
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table
      width="1200px"
      style="
        margin: auto;
        border-collapse: collapse;
        margin-top: 20px;
        font-family: Arial, Helvetica, sans-serif;
      "
    >
      <thead>
        <tr>
          <th style="border: 1px solid red">
            <p
              style="color: red; text-align: left; padding-left: 8px !important"
            >
              RENTED BY
            </p>
            <p style="text-align: left; padding-left: 8px !important">
              {{$data->customer_name}}
            </p>
          </th>
          <th colspan="2"></th>
          <th style="border: 1px solid red">
            <p
              style="text-align: left; padding-left: 8px !important; color: red"
            >
              RESERVATION NUMBER
            </p>
          </th>
          <th style="border: 1px solid red; background-color: red" colspan="4">
            <p>DISTANCES</p>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="border: 1px solid red; padding: 8px !important">
            <p style="color: red">RENTED FROM</p>
            <p>{{$data->rentalCompany->name}}</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              text-align: center;
            "
          >
            <p style="color: red">TIME OUT</p>
            <p>{{$data->pickup_date}} </p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              text-align: center;
            "
          >
            <p style="color: red">DATE</p>
            <p>{{$data->pickup_date}} </p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              vertical-align: top;
            "
            rowspan="2"
          >
            <p style="color: red">VEHICLE DETAILS</p>
            <p>WHI TOYO COHD 5AU539BR2</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              vertical-align: top;
            "
            rowspan="2"
          >
            <p>GP</p>
            <p>D</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              vertical-align: top;
            "
            rowspan="2"
          >
            <p>OUT</p>
            <p>{{$data->out_km}}</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              vertical-align: top;
            "
            rowspan="2"
          >
            <p>IN</p>
            <p>{{$data->out_km}}</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              vertical-align: top;
            "
            rowspan="2"
          >
            <p>DRIVEN</p>
            <p>@php
              $kmdiff = $data->in_km - $data->out_km; 
              echo $kmdiff;
          @endphp</p>
          </td>
        </tr>
        <tr>
          <td style="border: 1px solid red; padding: 8px !important">
            <p style="color: red">RETURNED to</p>
            <p>{{$data->rentalCompany->name}}</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              text-align: center;
            "
          >
            <p style="color: red">TIME IN</p>
            <p>{{$data->drop_date}}</p>
          </td>
          <td
            style="
              border: 1px solid red;
              padding: 8px !important;
              text-align: center;
            "
          >
            <p style="color: red">DATE</p>
            <p>{{$data->drop_date}}</p>
          </td>
        </tr>
      </tbody>
    </table>
    <table
      width="1200px"
      style="
        margin: auto;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
      "
    >
      <thead>
        <tr>
          <th style="border: 1px solid red; width: 50%">
            <p>Rental Details Rent</p>
          </th>
          <th
            style="
              border: 1px solid red;
              background-color: red;
              color: white;
              width: 15%;
            "
          >
            <p>RATE</p>
          </th>
          <th
            style="
              border: 1px solid red;
              background-color: red;
              color: white;
              width: 15%;
            "
          >
            <p>AMOUNT</p>
          </th>
          <th
            style="
              border: 1px solid red;
              background-color: red;
              color: white;
              width: 20%;
            "
          >
            <p>TOTAL CHARGES</p>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="border: 1px solid red; height: 450px; vertical-align: top">
            <p style="margin-left: 70px; padding-top: 5px">@php
              $diff = strtotime($data->drop_date) - strtotime($data->pickup_date); 
              $days= round($diff / (60 * 60 * 24));
              echo $days;
          @endphp Day(s)</p>
            <p style="margin-left: 93px">Time & Distance</p>
            <p style="margin-left: 93px">GST Charge on Taxable</p>
            <p style="margin-left: 93px; margin-top: 30px">Total Charges</p>
          </td>
          <td
            style="border: 1px solid red; vertical-align: top; text-align: end"
          >
            <p style="margin-top: 50px">10.00%</p>
          </td>
          <td style="border: 1px solid red; vertical-align: top">
            <p style="text-align: center; padding-top: 5px">518.70</p>
          </td>
          <td style="border: 1px solid red; vertical-align: top">
            <p style="margin-top: 30px; margin-left: 50px">518.70</p>
            <p style="margin-left: 50px">51.87</p>
            <p style="margin-left: 5px">-------------------</p>
            <p style="margin-left: 50px">570.57</p>
          </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td
            style="
              border: 1px solid red;
              text-align: center;
              background-color: rgba(116, 114, 114, 0.334);
              padding-block: 10px !important;
            "
          >
            <p>AVIS AUSTRALIA PO BOX 246 MASCOT NSW 1460 AUSTRALIA</p>
            <p>W.T.H. PTY. LIMITED A.C.N. 000 165 855, A.B.N. 15 000 165 855</p>
            <p style="margin-top: 30px">P357362386T</p>
          </td>
          <td style="border: 1px solid red; background-color: red" colspan="3 ">
            <div style="display: flex">
              <p
                style="
                  border: 2px solid white;
                  margin-left: 30px;
                  color: white;
                  padding: 5px !important;
                "
              >
                AMOUNT DUE
              </p>
              <p
                style="
                  background-color: white;
                  flex-grow: 1;
                  margin-left: 100px;
                  margin-right: 35px;
                  padding-top: 5px !important;
                "
              >
                <span style="margin-left: 100px">AUD </span>
                <span style="margin-left: 50px">$70.5</span>
              </p>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <table
      width="1200px"
      style="
        margin: auto;
        border-collapse: collapse;
        font-family: Arial, Helvetica, sans-serif;
      "
    >
      <thead>
        <tr>
          <th>
            <h2
              style="
                margin-top: 20px;
                padding-bottom: 20px !important;
                color: red;
              "
            >
              HOW TO PAY THIS INVOICE
            </h2>
          </th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td
            style="
              border: 2px solid red;
              height: 240px;
              width: 50%;
              text-align: center;
            "
          >
            <div style="display: flex; gap: 100px">
              <img
                style="margin-left: 10px"
                src="https://acorn.accrualdev.com/public/assets/images/Screenshot_16-8-2024_122554_.jpeg"
                alt=""
                height="35px"
                width="50px"
              />
              <div>
                <p>PLEASE PROCESS EFT PAYMENT TO</p>
                <p>BANK OF AMERICA BSB: 232-001 A/C: 18595032</p>
                <p>ACCOUNT NAME: WTH PTY LIMITE</p>
              </div>
            </div>
            <p style="margin-left: 50px; margin-top: 30px">AND</p>
            <p style="margin-left: 50px">
              Email remittance to remit@avis.com.au
            </p>
            <p style="margin-left: 50px">
              supplying details of: EFT payment date, total amount paid,
            </p>
            <p
              style="
                padding-left: 50px !important;
                margin-bottom: 30px;
                border-bottom: 2px solid rgba(0, 0, 0, 0.348);
                padding-bottom: 20px !important;
              "
            >
              company name, account number, rental agreement no/s, amount/
            </p>
          </td>
          <td style="width: 50%; vertical-align: top">
            <p style="margin-left: 10px">P357362386T</p>
            <p style="margin-top: 10px; margin-left: 10px">
              <span>VOUCH NO:</span>
              <span style="margin-left: 20px"> V123456</span>
              <span style="margin-left: 50px">VALUE:</span>
              <span style="margin-left: 50px">570.57</span>
            </p>
          </td>
        </tr>
      </tbody>
    </table>
    <div style="height: 100px"></div>
  </body>
</html>
