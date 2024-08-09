<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Agreement</title>
  </head>
  <body style="font-family: sans-serif; width: 100%; max-width: 210mm; margin: auto; padding: 20px; box-sizing: border-box;">
    <div style="width: 100%; max-width: 1250px; margin: auto;">
    <div style="width: 100%; margin-bottom: 32px;">
        <div style="float: left; width: 30%; text-align: center; margin-right: 5%;">
          {{-- <img src="{{asset('assets/images/rental_insurance_logo.png')}}" alt="logo" style="width: 90%; height: auto;" /> --}}
          <img src="https://test8.accrualdev.com/public/uploads/companylogo/{{$data->rentalCompany->logoimage}}" alt="logo" style="width: 90%; height: auto;" />
        </div>
        <div style="float: left; width: 65%;">
          <table style="width: 100%; border-collapse: collapse; font-size: 10px;">
            <thead>
              <tr>
                <th style="text-align: left; font-weight: 600;">CONTACT</th>
                <th style="text-align: left; font-weight: 600;">COMPANY</th>
                <th style="text-align: left; font-weight: 600;">HEAD OFFICE</th>
                <th style="text-align: left; font-weight: 600;">MAILING</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="white-space: nowrap;">
                  {{$data->rentalCompany->name}}<br />
                  ABN: {{$data->rentalCompany->abn_number}}<br />
                </td>
                <td class="white-space: nowrap;">
                  Ph: {{$data->rentalCompany->phone}}<br />
                  {{$data->rentalCompany->email}}<br />
                  {{-- Website: acornrentals.com.au --}}
                </td>
                <td class="white-space: nowrap;">
                  {{$data->rentalCompany->Address}}
                </td>
                <td class="white-space: nowrap;">
                  {{$data->rentalCompany->Address}}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="clear: both;"></div>
      </div>
@php
 $randomId =   rand(0, 99999);
@endphp
      <h1 style="font-size: 17px; text-align: center; font-weight: 600; font-size: 22px; text-decoration: underline; margin-bottom: 48px;">
        COMPLETED HIRE PARTICULARS:
        <span style="color: red; text-decoration: underline;">No. {{$randomId}}</span>
      </h1>

      <table style="font-size: 14px; width: 100%; font-size: 16px; text-align: left; border-collapse: collapse; margin-bottom: 48px; font-family: 'Times New Roman', Times, serif;">
        <tr>
          <th style=" font-size: 15px; padding-bottom: 10px; font-weight: bold; text-transform: uppercase; width: 100%;">MAIN HIRER:</th>
        </tr>
        <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">{{$data->customer_name}}</td>
        </tr>
        <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">{{$data->address}}</td>
        </tr>
        {{-- <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">Licence number: 029764031</td>
        </tr>
        <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">Class: C</td>
        </tr>
        <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">State: VIC</td>
        </tr>
        <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">D.O.B: 04/05/1961</td>
        </tr>
        <tr>
          <td style="font-size: 14px; color: #333; padding: 2px; font-weight: 600; width: 100%;">Exp. Date: 27/06/2024</td>
        </tr> --}}
      </table>


        <!-- Table Section -->
        <table style="
        font-size: 14px;
          width: 100%;
          border-collapse: collapse;
          box-sizing: border-box;
          text-align: center;
          font-family: 'Times New Roman', Times, serif;
          border: 1px solid black;
          margin-bottom: 16px;
        ">
          <thead>
            <tr>
              <th style="border: 1px solid black; padding: 12px; width: 25%; box-sizing: border-box;">Vehicle Rego</th>
              <th style="border: 1px solid black; padding: 12px; width: 25%; box-sizing: border-box;">Out Date/Time/Km</th>
              <th style="border: 1px solid black; padding: 12px; width: 25%; box-sizing: border-box;">In Date/Time/Km</th>
              <th style="border: 1px solid black; padding: 12px; width: 25%; box-sizing: border-box;">Duration / Total Km</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="border: 1px solid black; padding: 12px 0px; width: 25%; white-space: nowrap; box-sizing: border-box;">{{$data->rego_recovery}}</td>
              <td style="border: 1px solid black; padding: 12px 0px; width: 25%; white-space: nowrap; box-sizing: border-box;">{{$data->pickup_date}} / {{$data->in_km}}</td>
              <td style="border: 1px solid black; padding: 12px 0px; width: 25%; white-space: nowrap; box-sizing: border-box;">{{$data->drop_date}} / {{$data->out_km}}</td>
              <td style="border: 1px solid black; padding: 12px 0px; width: 25%; white-space: nowrap; box-sizing: border-box;">@php
                $diff = strtotime($data->drop_date) - strtotime($data->pickup_date); 
                $days= round($diff / (60 * 60 * 24));
                echo $days;
            @endphp / @php
                $kmdiff = $data->in_km - $data->out_km; 
                echo $kmdiff;
            @endphp</td>
            </tr>
            
          </tbody>
        </table>
      
        <!-- Additional Information Section -->

        <table style="width: 650px; margin-bottom: 80px; border-collapse: collapse; box-sizing: border-box; font-size: 14px;">
          <tr style="font-size: 12px; white-space: nowrap; overflow: hidden;">
            <td style="margin: 0; padding: 0;  box-sizing: border-box;">Overall Date/Time:</td>
            <td style="margin: 0; padding: 0;  box-sizing: border-box;">OUT: {{$data->pickup_date}}</td>
            <td style="margin: 0; padding: 0;  box-sizing: border-box;">IN: {{$data->drop_date}}</td>
            {{-- <td style="margin: 0; padding: 0;  box-sizing: border-box;">Petrol: OUT: Full</td>
            <td style="margin: 0; padding: 0;  box-sizing: border-box;">IN: Full</td> --}}
          </tr>
        </table>

    <!-- Agreement part -->

    <h2
      style="
        font-weight: 700;
        text-align: center;
        font-size: 18pt; /* Adjusted font size for better fit */
        font-family: 'Times New Roman', Times, serif;
        margin-bottom: 20px; /* Slightly increased margin for spacing */
        margin-top: 20px; /* Added margin-top for additional spacing */
        width: 100%; /* Ensures the text aligns properly within the page width */
        font-size: 17px;
        box-sizing: border-box;
      "
    >
      AGREEMENT TO HIRE RENTAL VEHICLE: No. {{$randomId}}
    </h2>

    <div style="width: 100%; margin-bottom: 16px; font-size: 12pt; font-size: 14px;">
      <div style="width: 100%; max-width: 550px; margin: 0 auto">
        <p
          style="
            float: left;
            width: 30%;
            font-weight: 700;
            margin: 0;
            padding: 0;
          "
        >
          MAIN HIRER:
        </p>
        <p
          style="
            float: right;
            width: 65%;
            margin: 0;
            padding: 0;
          "
        >
        {{$data->customer_name}} {{$data->address}}
        </p>
        <div style="clear: both"></div>
      </div>
      <div
        style="
          width: 100%;
          max-width: 550px;
          margin: 10px auto;
          padding: 0px 0;
        "
      >
        <p style="float: left; width: 30%; margin: 0; padding: 0">
          Licence Number:
        </p>
        <p
          style="
            float: right;
            width: 65%;
            margin: 5px 0px;
            padding: 0;
            border-bottom: 2px dotted black;
          "
        >
          029764031
        </p>
        <div style="clear: both"></div>
      </div>
      <div style="width: 100%; max-width: 550px; margin: 0 auto">
        <p style="float: left; width: 30%; margin: 0; padding: 0">Class:</p>
        <p
          style="
            float: right;
            width: 65%;
            margin: 5px 0px; 
            padding: 0;
            border-bottom: 2px dotted black;
          "
        >
          C
        </p>
        <div style="clear: both"></div>
      </div>
      {{-- <div style="width: 100%; max-width: 550px; margin: 0 auto">
        <p style="float: left; width: 30%; margin: 0; padding: 0">State:</p>
        <p
          style="
            float: right;
            width: 65%;
            margin: 5px 0px;
            padding: 0;
            border-bottom: 2px dotted black;
          "
        >
          VIC
        </p>
        <div style="clear: both"></div>
      </div>
      <div style="width: 100%; max-width: 550px; margin: 0 auto">
        <p style="float: left; width: 30%; margin: 0; padding: 0">D.O.B:</p>
        <p
          style="
            float: right;
            width: 65%;
            margin: 10px 0px;
            padding: 0;
            border-bottom: 2px dotted black;
          "
        >
          04/05/1961
        </p>
        <div style="clear: both"></div>
      </div>
      <div style="width: 100%; max-width: 550px; margin: 0 auto">
        <p style="float: left; width: 30%; margin: 0; padding: 0">Exp. Date:</p>
        <p
          style="
            float: right;
            width: 65%;
            margin: 10px 0px;
            padding: 0;
            border-bottom: 2px dotted black;
          "
        >
          27/06/2024
        </p>
        <div style="clear: both"></div>
      </div> --}}

      <!-- Vehicle Registration table Starts -->

      <table
        style="
          margin: 16px 0;
          width: 1000px; /* Adjust width for A4 dimensions */
          table-layout: fixed;
          border-collapse: collapse;
          font-family: 'Times New Roman', Times, serif;
          font-size: 16px;
        "
      >
        <thead>
          <tr>
            <th style="padding: 8px; width: 25%;white-space: nowrap;  text-align: left;">
              Vehicle Registration:
            </th>
            <th style="padding: 8px; width: 25%">
              {{$data->vehicle->reg_number}}
            </th>
            <th style="padding: 8px;white-space: nowrap;  width: 25%">
              Daily Rate Ex GST:
            </th>
            <th style="padding: 8px; width: 25%"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="white-space: nowrap; padding: 8px">Make & Model:</td>
            <td style="white-space: nowrap; padding: 8px">
              {{$data->vehicle->make->make_name}} {{$data->vehicle->model->model_name}}
            </td>
            <td style="white-space: nowrap; padding: 8px">
              Rental Fee:
            </td>
            <td style="padding: 8px">{{$data->rental_fee}}</td>
          </tr>
          <tr>
            <td style="white-space: nowrap; padding: 8px">
              Check Out Date & Time 24hrs:
            </td>
            <td style="white-space: nowrap; padding: 8px">
              {{$data->pickup_date}}
            </td>
            <td style="white-space: nowrap; padding: 8px">
              Insurance Cover:
            </td>
            <td style="padding: 8px">{{$data->insurance_cover}}</td>
          </tr>
          <tr>
            <td style="white-space: nowrap; padding: 8px">
              Check In Date & Time 24hrs:
            </td>
            <td style="padding: 8px">{{$data->drop_date}}</td>
            <td style="white-space: nowrap; padding: 8px">
              Rego Cover:
            </td>
            <td style="padding: 8px">{{$data->rego_recovery}}</td>
          </tr>
          <tr>
            <td style="white-space: nowrap; padding: 8px">
              Kilometers Out:
            </td>
            <td style="padding: 8px">{{$data->out_km}}</td>
            <td style="white-space: nowrap; padding: 8px">
              Administration Charges:
            </td>
            <td style="padding: 8px">{{$data->administration_charges}}</td>
          </tr>
          <tr>
            <td style="white-space: nowrap; padding: 8px"> Kilometers In:</td>
            <td style="padding: 8px">{{$data->in_km}}</td>
            <td style="white-space: nowrap; padding: 8px">
              Delivery Fee:
            </td>
            <td style="padding: 8px">{{$data->delivery_fee}}</td>
          </tr>
        </tbody>
      </table>
      <!-- Vehicle Registration table Ends -->

      <!-- Important points to note Starts -->
      <div
        style="
          overflow: hidden;
          font-family: 'Times New Roman', Times, serif;
          width: 100%;
          padding: 16px;
        "
      >
        <div
          style="
            width: 48%;
            float: left;
            margin-right: 4%;
            box-sizing: border-box;
          "
        >
          <h2 style="font-size: 14px; font-weight: 600; margin: 0 0 16px 0">
            IMPORTANT POINTS TO NOTE:
          </h2>
          <ol style="padding-left: 16px; font-size: 13px; padding-right:5px">
            <li style="margin-bottom: 16px">
              Hirer is liable for all parking and traffic violations (plus
              associated costs) and all toll charges (plus associated costs)
              incurred during the rental period. Please affix your electronic
              tag if you use one.
            </li>
            <li style="margin-bottom: 16px">
              Hirer agrees to return the vehicle with a fuel reading at least
              equal to the petrol out fuel reading.
            </li>
            <li style="margin-bottom: 16px">
              Smoking is not allowed in the vehicle.
            </li>
            <li style="margin-bottom: 16px">
              Please call us when returning your vehicle or on receipt of your
              settlement payout on 1300 22 67 67.
            </li>
          </ol>
        </div>
        <div style="width: 48%; float: left; box-sizing: border-box; padding-left: 5px;">
          <h2 style="font-size: 15px; font-weight: 600; margin: 0 0 16px 0">
            DAMAGE REPORT
          </h2>
          <p style="font-size: 13px; margin: 0 0 16px 0">
            By taking possession of the rental vehicle you agree to the damage
            report either provided to you by the depot or the damage report left
            in the vehicle.
          </p>
          <p style="font-size: 13px; margin: 0 0 16px 0">
            The hirer is responsible for any new damage sustained by the vehicle
            during the rental period.
          </p>
          <p style="font-size: 13px; margin: 0 0 16px 0; line-height: 18px;">
            ABOVE CABIN, PAN, WINDSCREENS, TYRES, WHEELS AND WINDOW DAMAGE IS
            HIRER'S COST AND IS NOT COVERED BY L.D.W. THE L.D.W AMOUNT PAYABLE
            IN THE EVENT OF LOSS OR DAMAGE PER INCIDENT IS: $385.00
          </p>
        </div>
        <div style="clear: both"></div>
      </div>

      <!-- Important points to note End -->

      <!-- Limited Damaged wavier Starts -->
      <div
        style="
          font-family: 'Times New Roman', Times, serif;
          width: 100%;
          padding: 16px;
          box-sizing: border-box;
        "
      >
        <div
          style="
            width: 48%;
            float: left;
            margin-right: 4%;
            box-sizing: border-box;
          "
        >
          <h2 style="font-size: 15px; font-weight: 600; margin: 0 0 16px 0;">
            LIMITED DAMAGE WAIVER (L.D.W.)
          </h2>
          <p style="font-size: 13px; padding-right: 5px; line-height: 18px;">
            By His/Her signature, the hirer accepts or declines to pay the
            L.D.W. fee in the event of an incident. The hirer will be liable for
            the full amount of all loss or damage to property in circumstances
            set out in clause 7 of the terms and conditions provided with this
            rental agreement, whether or not they have paid the L.D.W. fee.
            Otherwise, by signing below, the hirer agrees to pay the L.D.W. fee
            and understands that He/She is liable to pay the excess amount and
            will be covered for all other loss or damage to person or property
            arising out of the use of the vehicle.
          </p>
        </div>
        <div style="width: 48%; float: left; box-sizing: border-box">
          <h2 style="font-size: 15px; font-weight: 600; margin: 0 0 16px 0">
            HIRER'S SIGNATURE
          </h2>
          <p style="font-size: 13px; margin: 0"></p>
          <p style="font-size: 13px; padding-left:5px; line-height: 18px;">
            By His/Her signature, the hirer accepts or declines to pay the
            L.D.W. fee in the event of an incident. The hirer will be liable for
            the full amount of all loss or damage to property in circumstances
            set out in clause 7 of the terms and conditions provided with this
            rental agreement, whether or not they have paid the L.D.W. fee.
            Otherwise, by signing below, the hirer agrees to pay the L.D.W. fee
            and understands that He/She is liable to pay the excess amount and
            will be covered for all other loss or damage to person or property
            arising out of the use of the vehicle.
          </p>
        </div>
        <div style="clear: both"></div>
      </div>

      <!-- Limited Damaged wavier End -->

      <!-- Date Vehicle Out section starts -->
      <div
        style="
          position: relative;
          overflow: hidden;
          font-family: 'Times New Roman', Times, serif;
        "
      >
        <div style="width: 50%; float: left; margin-right: 24px">
          <div style="width: 100%; overflow: hidden; margin-bottom: 16px; font-size: 13px;">
            <div
              style="
                float: left;
                margin-right: 12px;
                width: 100%;
                width: 128px;
              "
            >
              Date vehicle out:  {{$data->pickup_date}}
            </div>
            <div
              style="
                float: right;
                width: calc(100% - 128px);
                border-bottom: 2px dotted black;
              "
            >
          </div>
          </div>
          <div style="width: 100%; overflow: hidden; margin-bottom: 16px">
            <div
              style="
                float: left;
                margin-right: 12px;
                width: 100%;
                max-width: 128px;
              "
            >
              Time vehicle out: {{$data->pickup_date}}
            </div>
            <div
              style="
                float: right;
                width: calc(100% - 128px);
                border-bottom: 2px dotted black;
              "
            ></div>
          </div>
          <div style="width: 100%; overflow: hidden; margin-bottom: 16px">
            <div
              style="
                float: left;
                margin-right: 12px;
                width: 100%;
                max-width: 128px;
              "
            >
              KMS out: {{$data->out_km}}
            </div>
            <div
              style="
                float: right;
                width: calc(100% - 128px);
                border-bottom: 2px dotted black;
              "
            ></div>
          </div>
          <div style="width: 100%; overflow: hidden; margin-bottom: 16px">
            <div
              style="
                float: left;
                margin-right: 12px;
                width: 100%;
                max-width: 128px;
              "
            >
              Email Address:{{$data->customer_name}}
            </div>
            <div
              style="
                float: right;
                width: calc(100% - 128px);
                border-bottom: 2px dotted black;
              "
            ></div>
          </div>
        </div>
        <div
          style="
            position: absolute;
            right: 0px;
            top: 25px;
            width: 48%;
            float: right;
            overflow: hidden;
          "
        >
          <p
            style="
              width: 95%;
              border-top: 1px solid black;
              padding-top: 8px;
              margin-bottom: 16px;
              text-align: center;
            "
          >
            Signed by or on behalf of {{$data->customer_name}}
          </p>
          <p style="width: 100%; text-align: center; font-size: 13px;">
            IMPORTANT: REFER TO TERMS AND CONDITIONS PROVIDED.
          </p>
        </div>
      </div>

      <!-- Date Vehicle Out section end -->

      <!-- Contract of Identity starts -->
      <div
        style="
          margin-bottom: 16px;
          font-weight: bold;
          font-family: 'Times New Roman', Times, serif;
          font-size: 16px;
        "
      >
        <h2 style="text-align: center; font-weight: bold; font-size: 16px">
          CONTRACT OF INDEMNITY FOR CAR HIRE CHARGES
        </h2>
        <div style="width: 100%; margin-bottom: 16px; overflow: hidden; font-size: 14px;">
          <span style="display: block; float: left; margin-right: 24px"
            >THIS AGREEMENT made on
          </span>
          <p
            style="
              width: calc(50% - 160px);
              float: left;
              border-bottom: 1px solid black;
              margin: 0;
            "
          >
           @php
             echo date("d/m/Y");
           @endphp
          </p>
        </div>
        <div style="width: 100%; margin-bottom: 16px; overflow: hidden">
          <span style="display: block; float: left; margin-right: 24px"
            >BETWEEN:
          </span>
          <p style="width: calc(100% - 160px); float: left; margin: 0">
            {{$data->rentalCompany->name}}.
          </p>
        </div>
        <div style="width: 100%; margin-bottom: 16px; overflow: hidden">
          <span style="display: block; float: left; margin-right: 24px"
            >AND:
          </span>
          <span style="float: left; margin-right: 12px"
            >[name of the hirer]</span
          >
          <p
            style="
              width: calc(60% - 160px);
              float: left;
              border-bottom: 2px dotted black;
              margin-right: 12px;
              margin: 0;
            "
          >
          {{$data->customer_name}}
          </p>
          <span style="float: left">here in after called 'the hirer'.</span>
        </div>
      </div>
      <!-- Contract of Identity ends -->
      <!-- Definition paragraph starts -->
      <div
        style="
          font-size: 12px;
          font-family: 'Times New Roman', Times, serif;
          margin-bottom: 48px;
        "
      >
        <p>Definitions:</p>
        <p>
          "This Agreement" includes the form and details that are attached to
          this contract.
        </p>
        <p>"Car Hire Charges" includes:-</p>
        <ol style="padding-left: 48px; list-style-type: lower-alpha">
          <li style="padding-left: 48px">
            The rate of hire multiplied by the hire period.
          </li>
          <li style="padding-left: 48px">
            The government charges that are paid on the hiring of the vehicle.
          </li>
          <li style="padding-left: 48px">
            Any charges that are levied for the extra benefits requested by the
            hirer, such as excess reduction, cleaning charges, etc.
          </li>
        </ol>
        <p>"The hirer" includes:­</p>
        <ol
          style="
            padding-left: 48px;
            list-style-type: lower-alpha;
            margin-bottom: 16px;
          "
        >
          <li style="padding-left: 48px">
            The person who hires the rental vehicle because his/her own vehicle
            was damaged in an accident.
          </li>
          <li style="padding-left: 48px">
            The person who hires the rental vehicle as an agent of the owner of
            the vehicle damaged in the accident.
          </li>
        </ol>
        <p>
          "Reasonable Need" means that the hirer has a need for a vehicle to
          replace his/her damaged vehicle, and that the need could not
          reasonably be satisfied by alternative means of transport.
        </p>
        <p>
          "Alternative means of transport" include among other things: public
          transport; second vehicle that was available for use.
        </p>
        <p>
          "Party at Fault" means the party who held liable for the accident.
        </p>
        <p>
          "Rental Vehicle" means the vehicle that is provided to the hirer by
          {{$data->rentalCompany->name}}.
        </p>
        <p>
          "Recovery" means that {{$data->rentalCompany->name}} may use any method and process to recover
          the hire car charges that are incurred by the hirer.
        </p>
        <p>"Reasonable Assistance" includes among other things:</p>
        <ol
          style="
            padding-left: 48px;
            list-style-type: lower-alpha;
            margin-bottom: 16px;
          "
        >
          <li style="padding-left: 48px">
            Providing a statement to {{$data->rentalCompany->name}} or its agents.
          </li>
          <li style="padding-left: 48px">
            Appearing in court to give evidence.
          </li>
          <li style="padding-left: 48px">
            Furnishing information and documents at the request of {{$data->rentalCompany->name}} or its
            agents,
          </li>
        </ol>
        <p>Terms</p>
        <ol style="padding-left: 16px; margin-bottom: 16px">
          <li style="padding-left: 32px">
            The hirer hires {{$data->rentalCompany->name}}'s vehicle at the rate and on the terms
            specified in the rental agreement.
          </li>
          <li style="padding-left: 32px">
            The hirer has represented to {{$data->rentalCompany->name}} that he/she was not the 'party at
            fault' in the accident.
          </li>
          <li style="padding-left: 32px">
            The hirer has reasonable need for the rental vehicle while his/her
            vehicle is being repaired.
          </li>
          <li style="padding-left: 32px">
            The hirer's need for the vehicle could not be fulfilled by
            alternative means of transport.
          </li>
          <li style="padding-left: 32px">
            The hirer is to be indemnified for the car hire charges by {{$data->rentalCompany->name}}
            subject to the conditions below.
          </li>
        </ol>
        <p>Conditions of Indemnity</p>
        <ol style="padding-left: 16px; margin-bottom: 16px">
          <li style="padding-left: 32px">
            {{$data->rentalCompany->name}} indemnifies the hirer for the car hire charges inconsideration
            of the hirer subrogating to {{$data->rentalCompany->name}}, his/her rights to recover the car
            hire charges from the party at fault.
          </li>
          <li style="padding-left: 32px">
            {{$data->rentalCompany->name}} is subrogated to the rights of the hirer to recover the car
            hire charges.
          </li>
          <li style="padding-left: 32px">
            The hirer is to provide whatever reasonable assistance is sought by
            {{$data->rentalCompany->name}} or its agents, in the recovery of the car hire charges.
          </li>
        </ol>
        <p>Subrogation</p>
        <ol style="padding-left: 16px; margin-bottom: 16px">
          <li style="padding-left: 48px">
            Subrogating the rights of the hirer, to {{$data->rentalCompany->name}} includes inter alia:
            <ol style="padding-left: 16px; list-style-type: lower-alpha">
              <li style="padding-left: 48px">
                The right of {{$data->rentalCompany->name}} or its agents to commence proceedings in the
                name of the hirer and/or Leo & Leo Pty Ltd TIA {{$data->rentalCompany->name}} Rentals.
              </li>
              <li style="padding-left: 48px">
                The right of {{$data->rentalCompany->name}} or its agents to collect all money recovered
                on behalf of the hirer.
              </li>
              <li style="padding-left: 48px">
                The right of {{$data->rentalCompany->name}} or its agents to keep and apply all monies
                recovered to the satisfaction of the car hire charges.
              </li>
              <li style="padding-left: 48px">
                The right to obtain all information on behalf of the hirer, that
                may reasonably be necessary to recover the hire car charges.
              </li>
            </ol>
          </li>
        </ol>
        <p>Termination</p>
        <ol style="padding-left: 16px; margin-bottom: 32px">
          <li style="padding-left: 48px">
            {{$data->rentalCompany->name}} may rescind this contract of indemnity if the hirer:
            <ol style="padding-left: 16px; list-style-type: lower-alpha">
              <li style="padding-left: 48px">
                Has not been truthful and frank in the information it provides
                to {{$data->rentalCompany->name}}
              </li>
              <li style="padding-left: 48px">
                Has not acted with the utmost good faith towards {{$data->rentalCompany->name}}.
              </li>
              <li style="padding-left: 48px">
                Breaches any of the terms and condition on behalf of the' hirer,
                that may reasonably be necessary to recover the hirer car
                charges.
              </li>
              <li style="padding-left: 48px">
                Signs any release forms without first consulting {{$data->rentalCompany->name}}.
              </li>
            </ol>
          </li>
          <li>
            If {{$data->rentalCompany->name}} rescinds this contract, the hirer will be fully liable to
            {{$data->rentalCompany->name}} for the hire car charges.
          </li>
          <li>
            If the hirer attempts to rescind or terminate this contract, the
            hirer will be fully liable to {{$data->rentalCompany->name}} for the car hire charges.
          </li>
        </ol>
        <p style="margin-bottom: 48px; font-weight: bold">
          I (the hirer) have read the terms and conditions of this contract, and
          agree to be bound by them.
        </p>
        <p
          style="
            width: 100%;
            max-width: 400px;
            border-bottom: 1px solid black;
            margin-bottom: 12px;
          "
        >
        <img src="https://test8.accrualdev.com/public/assets/signature/{{$data->signature}}"  alt="signature" width="200">
      </p>
        <p style="margin-bottom: 16px; font-weight: bold">
          Signed by or on Behalf of {{$data->customer_name}}
        </p>
        <p style="margin-bottom: 16px; font-weight: bold">Dated:</p>
        @php
          echo date("d/m/y")
        @endphp
        <p
          style="
            border-top: 1px solid black;
            text-align: center;
            margin-bottom: 48px;
            font-style: italic;
          "
        >
          {{$data->rentalCompany->name}} RENTALS - CAP! Licence 409398430 Copyright 2022
        </p>
        <p style="font-weight: bold; margin-bottom: 48px">
          To Whom It May Concern:
        </p>
        <p style="margin-bottom: 16px; font-weight: bold">
          Due to a recent accident, my vehicle has been damaged.
        </p>
        <p style="margin-bottom: 32px; font-weight: bold">
          As a result of the damage I have lost the availability and convenience
          of my vehicle during the assessment/repair or settlement period. I
          will likely use the replacement vehicle for similar purposes that I
          used my vehicle for before the accident which include domestic,
          household and family purposes. From the outset of the rental period I
          do not intend on being away or abroad for any reason. I do not have
          another vehicle readily available to me.
        </p>
        <p style="font-weight: bold; margin-bottom: 32px">
          Yours faithfully {{$data->customer_name}}
        </p>
        <div style="width: 100%; margin-bottom: 32px; overflow: hidden">
          <span style="float: left; margin-right: 12px; font-weight: bold"
            >Name:
          </span>
          <p
            style="
              width: calc(40% - 48px);
              float: left;
              border-bottom: 2px dotted black;
              margin: 16px 0px;
            "
          >
          {{$data->rentalCompany->name}}
        </p>
        </div>
        <div style="width: 100%; font-weight: bold; overflow: hidden">
          <span style="float: left; margin-right: 12px; font-weight: bold"
            >Signature:</span
          >
          <div style="width: calc(45% - 48px); float: left; margin: 0 0 16px 0">
            <p style="border-bottom: 2px dotted black; margin: 0; padding: 0">
              <img src="https://test8.accrualdev.com/public/assets/signature/{{$data->signature}}" width="200" alt="signature">
            </p>
            <p style="margin: 0; padding: 0; font-weight: bold">
              (Signed by or on behalf of the owner of the damaged vehicle)
            </p>
          </div>
        </div>

        <div
          style="
            width: 100%;
            font-weight: bold;
            overflow: hidden;
            margin-top: 18px;
          "
        >
        @php
          echo date("d/m/y")
        @endphp
          <span style="float: left; margin-right: 12px; font-weight: bold"
            >Date:</span
          >
          <p
            style="
              width: calc(45% - 48px);
              float: left;
              border-bottom: 2px dotted black;
              margin: 16px 0px;
            "
          ></p>
        </div>
        <div
          style="
            width: 100%;
            font-weight: bold;
            overflow: hidden;
            margin-top: 18px;
          "
        >
        <p style="float: left; margin-right: 12px; font-weight: bold" >Licence Image:</p>
        <p>
          <img src="https://test8.accrualdev.com/public/uploads/licence_images/{{$data->licence_image}}" width="300" alt="signature">        </p>
        </div>
      </div>
      <!-- Definition paragraph ends -->
    </div>
  </body>
</html>
